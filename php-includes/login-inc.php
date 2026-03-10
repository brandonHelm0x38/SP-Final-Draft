<?php


if(isset($_POST['login-form-btn'])) {
    // Grabbing the data
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    // JavaScript should have already validated the input fields... (TODO: Add server-side validation)

    // Instantiate Login class
    include 'classes/dbh.php'; // Database handler
    include 'classes/login.php'; // Extends Dbh
    include 'classes/login-contr.php'; // Calls Login class methods
    $login = new LoginContr($email, $password);

    // Running error handlers and user login
    $login->loginUser();

    // Go to the Admin profile page to finish the account setup...
    header("location: ../pages/admin/std-user/std-dashboard.php?error=none");
    exit();
}
else {  // Else redirect to the main homepage because form submission failed and there is an issue with the form...
    header("location: ../index.php?error=formfailed");
    exit();
}
