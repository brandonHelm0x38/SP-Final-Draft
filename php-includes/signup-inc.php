<?php


if(isset($_POST['signup-form-btn'])) {
    // Grabbing the data
    $nameAlias = $_POST['signup-name'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $passwordRepeat = $_POST['signup-password-confirm'];
    if (isset($_POST['newsletter-signup-check'])) {
        $newsletterSubscriber = true;
    } else {
        $newsletterSubscriber = false;
    }

    // JavaScript should have already validated the input fields... (TODO: Add server-side validation)

    // Instantiate SignupContr class
    include 'classes/dbh.php'; // Database handler
    include 'classes/signup.php'; // Extends Dbh
    include 'classes/signup-contr.php'; // Calls Signup class methods
    $signup = new SignupContr($nameAlias, $email, $password, $passwordRepeat, $newsletterSubscriber);

    // Running error handlers and user signup
    $signup->signupUser();

    // Go to the Admin profile page to finish the account setup...
    header("location: ../pages/admin/user-profile.php?error=none");
    exit();
}
else {  // Else redirect to the main homepage because form submission failed and there is an issue with the form...
    header("location: ../index.php?error=formfailed");
    exit();
}