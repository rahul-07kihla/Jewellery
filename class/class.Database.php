<?php
include_once '../include/connect.php';
// print_r($conn);
// exit;
class Database
{                           
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        
        // return $this->connection;
    }
}
?>