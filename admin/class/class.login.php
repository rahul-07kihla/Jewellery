<?php
include_once '../include/connect.php';
include_once 'class.Database.php';

class Login
{
    public function login1($username,$password)
    {
 
        $mysqli = new Database();
        
        $query = "SELECT * FROM `admin` WHERE username='".$username."' AND password='".$password."'";
        // print_r($query);
        // exit;
        $res = $mysqli->connection->query($query);

        return $res->fetch_assoc();
    }
}

?>