<?php
include_once '../include/connect.php';
include_once '../class/class.Database.php';
$s=$_GET['type2'];
$a=$_GET['type'];


    if($a && ($s == 0 || $s))
    {
        if($s==1)
        {
            $q = "UPDATE category SET status='0' WHERE id={$_GET['id']}";

            $res = mysqli_query($conn , $q);
            header("Location:../categorydisplay.php");
        }
        else
        {
            $q = "UPDATE category SET status='1' WHERE id={$_GET['id']}";

            $res = mysqli_query($conn , $q);
            header("Location:../categorydisplay.php");
        }
    }

?>