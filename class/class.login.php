<?php
include_once 'class.Database.php';

class login
{
    public function userlogin($username,$password)
    {
        $mysqli = new Database();
    //    print_r($mysqli->connection);
    //    exit;
        $query = "SELECT * FROM `user` WHERE `email`='".$username."' AND `password`='".$password."'";
        
        $res = $mysqli->connection->query($query);

        // print_r($result);
        // exit;
        $row = $res->fetch_assoc();
        $row['count'] = $res->num_rows;
        return $row;
    }
} 