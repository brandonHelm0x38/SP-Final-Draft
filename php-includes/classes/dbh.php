<?php

class Dbh {
    
    public function connect() {

        try {
            $username = "root";
            $password = "";
            $dbname = "strategicpivotmain";
            $servername = "localhost";

            // The connection string I'm used to using...
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Dani Krossing connection string...
            //$dbh = new PDO("mysql:host=".$servername.";dbname=".$dbname, $username, $password);
            return $conn;
        
        } 
        // catch (PDOException $e) {
        //     echo "Connection failed: ".$e->getMessage();
        //     die();
        // }
        catch(Exception $e) {
            echo "Connection failed: ".$e->getMessage();
            echo "Connection failed: ".mysqli_connect_error();
            die();
        }
        
    }
    
}