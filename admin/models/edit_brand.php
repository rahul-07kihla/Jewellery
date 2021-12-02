<?php
include_once '../include/connect.php';
include_once '../class/class.Database.php';

extract($_POST);

$err = array();
$succ = array();

if($name=="")
{
    $err[] = "Brand name is empty";
}

if(!(empty($err))  && $flag = 0)
{
    $_SESSION['err'] = $err;
}
else
{

$query = "UPDATE brand SET brandname='$name' WHERE id={$_POST['id']}";

$res = mysqli_query($conn , $query);

if($res)
{
    $succ[] = "Successfully Upadate Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header("Location:../branddisplay.php");
}
else
{
    header("Location:../editbrand.php?id=".$_POST['id']."");
}
}
?>
