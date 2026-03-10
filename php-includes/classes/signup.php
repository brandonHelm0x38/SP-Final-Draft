<?php

// Keep in mind that redirects are relative to the location of the PHP script that is calling this class...

class Signup extends Dbh {

    protected function checkUserExists($email) {
        $sql = "SELECT * FROM users_login WHERE v_user_email = ?";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        if (!$stmt->execute()) {
            header("location: ../index.php?error=queryexistingfailed");
            exit();
        }
        $result = $stmt->get_result();
        $resultCheck = ($result->num_rows > 0);
        $stmt->close();
        return $resultCheck;
    }
    
    // Keep in mind when you create a user...
    // The login table is made slim for logins and has a security-focused design, in line with implementing my compartmentalized RSA design for password encryption/decryption on logins and throughout the system when accessing critical data...
    // As a result, the newsletter subscriber field is held in a different table, which also has all the critical data for sending newsletters.
    public function signupMethod($nameAlias, $email, $password, $newsletterSubscriber) {
        // Insert record into login table...
        $sql_login = "INSERT INTO users_login (v_user_email, v_password, n_admin_class ) VALUES (?, ?, ?)";
        $conn = $this->connect();
        $stmt_login = $conn->prepare($sql_login);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $adminClass = 1; // n_admin_class set to 1 (default user)

        $stmt_login->bind_param("ssi", $email, $hashedPassword, $adminClass);
        $insertedIntoLogin = $stmt_login->execute();
        $stmt_login->close();

        if (!$insertedIntoLogin) {
            header("location: ../index.php?error=firstinsertfailed");
            exit();
        } else {
            // Query the record you just inserted to get the linking n_user_id field...
            $sql_get_id = "SELECT * FROM users_login WHERE v_user_email = ?";
            $stmt_get_id = $conn->prepare($sql_get_id);
            $stmt_get_id->bind_param("s", $email);
            $stmt_get_id->execute();
            $result = $stmt_get_id->get_result();
            $row = $result->fetch_assoc();
            $userId = $row['n_user_id'];
            $stmt_get_id->close();

            // Insert record into core data table...
            $sql_core = "INSERT INTO users_core_data (n_user_id, v_name_alias, b_newsletter_subscriber) VALUES (?, ?, ?)";
            $stmt_core = $conn->prepare($sql_core);
            $stmt_core->bind_param("isi", $userId, $nameAlias, $newsletterSubscriber);
            $insertedNewsletterBool = $stmt_core->execute();
            $stmt_core->close();

            // If user was created successfully, but newsletter bool failed to insert, you could potentially delete the user from the login table to maintain data integrity...
            if (!$insertedNewsletterBool) {
                $sql_delete_user = "DELETE FROM users_login WHERE n_user_id = ?";
                $stmt_delete_user = $conn->prepare($sql_delete_user);
                $stmt_delete_user->bind_param("i", $userId);
                $stmt_delete_user->execute();
                $stmt_delete_user->close();

                header("location: ../index.php?error=secondinsertfailed");
                exit();
            }
            else { // New users are redirected to the user profile management page to finish setting up their account...
                // Login successful, start session...
                session_start();
                $_SESSION['n_user_id'] = $userId;
                $_SESSION['v_name_alias'] = $nameAlias;
                $_SESSION['v_user_email'] = $row['v_user_email'];
                $_SESSION['n_admin_class'] = $row['n_admin_class'];

                header("location: ../pages/admin/user-profile.php?error=none");
                exit();
            }
        }

    }
}