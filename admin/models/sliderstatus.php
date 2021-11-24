<?php
include_once '../include/connect.php';
include_once '../class/class.Database.php';
$status = $_GET['type2'];
$check = $_GET['type'];

if($check && ($status==0 || $status))
{
    if($status==1){
    $query = "UPDATE slider SET status='0' WHERE id={$_GET['id']}";

    $res = mysqli_query($conn , $query);

    header('Location:../sliderdisplay.php');
    }
    else
    {
        $query = "UPDATE slider SET status='1' WHERE id={$_GET['id']}";

            $res = mysqli_query($conn , $query);
        
            header('Location:../sliderdisplay.php');
    }
}
?>