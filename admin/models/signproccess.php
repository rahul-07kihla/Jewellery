<?php
include_once '../include/connect.php';
// include '../class/Database.php';
// include 'class/class.Signup.php';
$query = "SELECT * FROM `user` WHERE username='".$_POST['username']."'";

$res = mysqli_query($conn,$query);

$row = mysqli_num_rows($res);

extract($_POST);

$err = array();
$succ = array();
$password = md5($_POST['pwd']);
$cpassword = md5($_POST['cpwd']);

//image validation
if(isset($_FILES['image'])) {
    $maxsize    = 2097152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );
    if($_FILES['image']['name']=="")
    {
        $err[] = 'File is not uploaded';
    }
    
    else if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
        $err[] = 'File too large. File must be less than 2 megabytes.';
    }

    if(!in_array($_FILES['image']['type'], $acceptable) && (!empty($_FILES["image"]["type"]))) {
    $err[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
}
}

//username validation
if($username=="")
{
    $err[] = "Username is empty<br>";
}
else if(strlen($username)<=8)
{
    $err[] = "Username must be 9 characters or more<br>";
}
else if($row)
{
    $err[] = "Username is aleady taken";
}

//email validation
if($email=="")
{
    $err[] = "email address is empty<br>";
}
else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $err[] = "email is not a valid email address<br>";
} 
else if($row)
{
    $err[] = "Email is aleady taken";
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

$file = $_FILES['image'];
$target_dir = PROFILE_IMAGE_UPLOAD;

$file_name = $file['name'];
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

    $flag = 1;
}
else
{
    $flag = 0;
}

if(!(empty($err)))
{
    $_SESSION['err'] = $err;
    
    header("Location:../signup.php");
}
else
{

    $query = "INSERT INTO user(profile, username, email, password,confirmpassword) VALUES ('$file_name','$username','$email','$password','$cpassword')";

$res = mysqli_query($conn , $query);
    
if($res)
{
    $succ[] = "Successfully Inserted Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header('Location:../user.php');
}
else
{
    header('Location:../signup.php');
}
}
?>