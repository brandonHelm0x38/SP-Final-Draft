<?php

// Keep in mind that redirects are relative to the location of the PHP script that is calling this class...

class Login extends Dbh {

    public function loginMethod($email, $password) {
        $sql = "SELECT * FROM users_login WHERE v_user_email = ?";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        if (!$stmt->execute()) {
            header("location: ../index.php?error=queryexistingfailed");
            exit();
        }
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();

        if ($result->num_rows === 0) {
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        $userID = $row['n_user_id'];
        $hashedPassword = $row['v_password'];
        $adminClass = $row['n_admin_class'];

        if (!password_verify($password, $hashedPassword)) {
            header("location: ../index.php?error=wrongpassword");
            exit();
        }

        // If you get to this point in the script, the login is successful...
        // Grab name alias from the user_core_data table...
        $sql2 = "SELECT v_name_alias FROM users_core_data WHERE n_user_id = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("i", $userID);
        $stmt2->execute();
        $nameAlias = $stmt2->get_result()->fetch_assoc()['v_name_alias'];
        $stmt2->close();

        // Login successful, start session...
        session_start();
        $_SESSION['n_user_id'] = $userID;
        $_SESSION['v_name_alias'] = $nameAlias;
        $_SESSION['v_user_email'] = $row['v_user_email'];
        $_SESSION['n_admin_class'] = $adminClass;
        //$_SESSION['user_email'] = $row['v_user_email'];

        // This is the live redirect link for the user dashboard page...
        if ($adminClass === 1) {
            header("location: ../pages/admin/std-user/std-dashboard.php?login=success");
            exit();
        } else if ($adminClass === 2) {
            header("location: ../pages/admin/newsltr-author/author-dashboard.php?login=success");
            exit();
        } else if ($adminClass === 3) {
            header("location: ../pages/admin/sp-board/board-dashboard.php?login=success");
            exit();
        } else {
            header("location: ../../index.php?error=adminclass");
            exit();
        }

    }
}
    