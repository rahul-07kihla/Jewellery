<?php
include_once '../include/connect.php';

$password = md5($_POST['pwd']);
$cpassword = md5($_POST['cpwd']);

extract($_POST);

$err = array();
$succ = array();

//username validation
if($username=="")
{
    $err[] = "Username is empty,Do you want to use old username?<br>";
}
else if(strlen($username)<=8)
{
    $err[] = "Username must be 9 characters or more<br>";
}

//email validation
if($email=="")
{
    $err[] = "email address is empty,do you want to use old email address?<br>";
} 
else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $err[] = "email is not a valid email address<br>";
}

//password validation
if($pwd=="")
{
    $err[] = "Password is empty<br>";
}

//confirm password validation
if($cpwd=="")
{
    $err[] = "confirm password is empty<br>";
}
else if($pwd!=$cpwd)
{
    $err[] = "password are not match<br>";
}

//image validation
if(isset($_FILES['profile'])) {
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );
    if($_FILES['profile']['name']=="")
    {
        $err[] = 'File is not uploaded';
    }
    
    else if(($_FILES['profile']['size'] >= $maxsize) || ($_FILES["profile"]["size"] == 0)) {
        $err[] = 'File too large. File must be less than 2 megabytes.';
    }

    if(!in_array($_FILES['profile']['type'], $acceptable) && (!empty($_FILES["profile"]["type"]))) {
    $err[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
}
}

$file = $_FILES['profile'];
$target_dir = PRODUCT_IMAGE_UPLOAD;

$file_name = $file['name'];
$target_file = $target_dir . basename($_FILES["profile"]["name"]);

if(move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file))
{
    // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    // header("Location:../productdisplay.php");
    $flag = 1;
}
else
{
    $flag = 0;
}

if(!(empty($err)))
{
    $_SESSION['err'] = $err;
}
else
{
    if($flag)
    {
        $query = "UPDATE user SET profile='$file_name' ,username='$username',email='$email',password='$password',confirmpassword='$cpassword' WHERE id={$_POST['id']}";
    }
    else
    {
        $query = "UPDATE user SET username='$username',email='$email',password='$password',confirmpassword='$cpassword' WHERE id={$_POST['id']}";
    }
    
    $res = mysqli_query($conn , $query);

if($res)
{
    $succ[] = "Successfully Upadate Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header("Location:../user.php");
}
else
{
    header("Location:../edituser.php?id=".$_POST['id']."");
}
}
?>