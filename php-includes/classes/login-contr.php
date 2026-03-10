<?php

class LoginContr extends Login {
    
    // Create object properties
    private $email;
    private $password;

    // Create the class constructor for the object
    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    // Error handlers can be bypassed when JavaScript validation is in place...
    // Perhaps just leave this isEmpty function in place on the PHP side.
    private function emptyInput() {
        $result;
        if (empty($this->email) || empty($this->password)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function loginUser() {
        if ($this->emptyInput()) {
            header("location: ../../index.php?error=emptyinput");
            exit();
        }

        $this->loginMethod($this->email, $this->password);
    }
}