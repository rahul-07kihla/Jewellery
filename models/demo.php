<?php
// Start the session
//session_destroy();
session_start();
 echo session_id();
// Set session variables
$_SESSION['demo']="demo";
//print_r($_SESSION);
?>