
<?php
session_start();

// Include database connection class
// include '../../../php-includes/classes/dbh.php';
// $conn = (new Dbh())->connect();

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'strategicpivotmain';

$conn = new mysqli($host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno) {
    echo "<script>console.log('DBH Connection Error: " . $conn->connect_error . "');</script>";
    exit;
}

// Get user ID from session
$user_id = isset($_SESSION['n_user_id']) ? $_SESSION['n_user_id'] : null;
if (!$user_id) {
	echo "<script>console.log('User not logged in.');</script>";
	exit;
}

if(isset($_POST['update-profile-btn'])) {
    // Get POST data from form
    $name_alias = !empty($_POST['user-name-alias']) ? $_POST['user-name-alias'] : $_SESSION['v_name_alias'];
    $company = isset($_POST['user-company']) ? $_POST['user-company'] : '';
    $title = isset($_POST['user-roletitle']) ? $_POST['user-roletitle'] : '';
    // Subscriptions are passing/setting correctly here...
    $newsletter_subscription = isset($_POST['newsletter-subscription']) ? 1 : 0;
    $report_subscription = isset($_POST['followed-projects-report']) ? 1 : 0;
    // For debugging only...
    // echo json_encode(['newsletter_subscription' => $newsletter_subscription, '$report_subscription' => $report_subscription]);
    // exit;

    // This has been proven to be working correctly...
    $email = isset($_POST['user-email']) ? $_POST['user-email'] : $_SESSION['v_user_email'];
    $emailChange = ($email !== $_SESSION['v_user_email']);
    // For debugging only...
    // echo json_encode(['email' => $email, 'emailChange' => $emailChange]);
    // exit;

    // Prepare SQL update statement
    $sql = "UPDATE users_core_data SET v_name_alias = ?, v_user_company = ?, v_user_roletitle = ?, b_newsletter_subscriber = ?, b_report_subscriber = ? WHERE n_user_id = ?";

    // echo "<script>console.log('SQL: " . $sql . "');</script>";
    // echo "<script>console.log('Name Alias: " . $name_alias . "');</script>";
    // echo "<script>console.log('Company: " . $company . "');</script>";
    // echo "<script>console.log('Title: " . $title . "');</script>";
    // echo "<script>console.log('Newsletter Subscription: " . $newsletter_subscription . "');</script>";
    // echo "<script>console.log('Report Subscription: " . $report_subscription . "');</script>";
    // echo "<script>console.log('User ID: " . $user_id . "');</script>";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssiii",
        $name_alias,
        $company,
        $title,
        $newsletter_subscription,
        $report_subscription,
        $user_id
    );

    if ($stmt->execute()) {
        if (!$emailChange) {
            $stmt->close();
            $conn->close();
            header("Location: ../user-profile.php?success=true");
            //echo "<script>console.log('Query Success -> No email change...');</script>";
            // Update successful, update session variables...
            session_start();
            $_SESSION['v_name_alias'] = $name_alias;
            exit;
        } else {
            $stmt->close();
            // Update successful, update session variables...
            session_start();
            $_SESSION['v_name_alias'] = $name_alias;
            $sql_email = "UPDATE users_login SET v_user_email = ? WHERE n_user_id = ?";
            $stmt_email = $conn->prepare($sql_email);
            $stmt_email->bind_param("si", $email, $user_id);
            if ($stmt_email->execute()) {
                $stmt_email->close();
                $conn->close();
                header("Location: ../user-profile.php?success=true");
                //echo "<script>console.log('Query Success -> Email changed...');</script>";
                // Update successful, update session variables...
                $_SESSION['v_user_email'] = $email;
                exit;
            } else {
                $stmt_email->close();
                $conn->close();
                header("Location: ../user-profile.php?error=emailupdate");
                //echo "<script>console.log('Query Failure -> On email change...');</script>";
                exit;
            }
        }
    } else {
        $stmt->close();
        $conn->close();
        header("Location: ../user-profile.php?success=false");
        //echo "<script>console.log('Query Failure -> Core data update...');</script>";
        exit;
    }
}
else {
    // Form issue redirect...
    header("Location: ../user-profile.php?error=form");
    //echo "<script>console.log('Form Failure -> Unknown Error...');</script>";
    exit;
}