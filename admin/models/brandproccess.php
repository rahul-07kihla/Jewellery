<?php
include_once '../include/connect.php';

extract($_POST);

$err = array();
$succ = array();

if($name=="")
{
    $err[] = "Brand name is empty";
}

if(!(empty($err)))
{
    $_SESSION['err'] = $err;
}
else
{
$query = "INSERT INTO brand(brandname) VALUES ('$name')";
}
$res = mysqli_query($conn , $query);

if($res)
{
    $succ[] = "Successfully Inserted Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header("Location:../branddisplay.php");
}
else
{
    header("Location:../brand.php");
}
?>