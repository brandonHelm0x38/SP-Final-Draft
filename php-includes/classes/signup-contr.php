<?php

class SignupContr extends Signup {
    
    // Create object properties
    private $nameAlias;
    private $email;
    private $password;
    private $passwordRepeat;
    private $newsletterSubscriber;

    // Create the class constructor for the object
    public function __construct($nameAlias, $email, $password, $passwordRepeat, $newsletterSubscriber) {
        $this->nameAlias = $nameAlias;
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
        $this->newsletterSubscriber = $newsletterSubscriber;
    }

    // Error handlers can be bypassed when JavaScript validation is in place...
    // Perhaps just leave this isEmpty function in place on the PHP side.
    private function emptyInput() {
        $result;
        if(empty($this->nameAlias) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if ($this->password !== $this->passwordRepeat) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function doesUserExist() {
        $result;
        if ($this->checkUserExists($this->email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function signupUser() {
        if ($this->emptyInput()) {
            header("location: ../../index.php?error=emptyinput");
            exit();
        }
        if ($this->pwdMatch()) {
            header("location: ../../index.php?error=passwordsdontmatch");
            exit();
        }
        if ($this->doesUserExist()) {
            header("location: ../../index.php?error=userexists");
            exit();
        }

        $this->signupMethod($this->nameAlias, $this->email, $this->password, $this->newsletterSubscriber);
    }
}