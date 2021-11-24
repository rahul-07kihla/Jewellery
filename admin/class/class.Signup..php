<?php

include_once 'class/class.Database.php';

class Signup extends Database
{
    function Validate($row)
    {
        $err = array();
        if(isset($row) && count($row)>0)
        {
            if(empty($row['username']))
            {
                $err[] = "User name is required";
            }
            else if(empty($row['email']))
            {
                $err[] = "Email is required";
            }
            else if(empty($row['pwd']))
            {
                $err[] = "Password is reqired";
            }
        }
    }
}