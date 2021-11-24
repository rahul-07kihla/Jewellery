<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once '../include/connect.php';
include_once '../class/class.Database.php';

if($_GET['type3']=="status") 
{

    $s = $_GET['type2'];
    $a = $_GET['type3'];

    if($a && ($s == 0 || $s))
    {
        if($s==1)
        {
            $q = "UPDATE product SET status='0' WHERE id={$_GET['id']}";
        
            $res = mysqli_query($conn , $q);
            
            header("Location:../productdisplay.php");
        }
        else
        {
            $q = "UPDATE product SET status='1' WHERE id={$_GET['id']}";

            $res = mysqli_query($conn , $q);
            
            header("Location:../productdisplay.php");
        }
    }
  }

if($_GET['type3']=="stock")
{
    $s1 = $_GET['type4'];
    if($s1 == 0 || $s1)
    {
        if($s1==1)
        {
            echo "test";
            $q = "UPDATE `product` SET `stock`='0' WHERE id={$_GET['s_id']}";
            print_r($q);
            $res = mysqli_query($conn , $q);
            
            header("Location:../productdisplay.php");
        }
        else
        {
            echo "test1";
            $q = "UPDATE `product` SET `stock`='1' WHERE id={$_GET['s_id']}";
            print_r($q);
            $res = mysqli_query($conn , $q);
            
            header("Location:../productdisplay.php");
        }
    }
}

?>