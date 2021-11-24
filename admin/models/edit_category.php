<?php
include_once '../include/connect.php';

extract($_POST);

$err = array();
$succ = array();

//username validation
if($name=="")
{
    $err[] = "name is empty<br>";
}

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

$file = $_FILES['image'];
$target_dir = CATEGORY_IMAGE_UPLOAD;

$file_name = $file['name'];
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";

    $flag = 1;
}
else
{
    $flag = 0;
}
if(!(empty($err)))
{
    $_SESSION['err'] = $err;
    // print_r($_SESSION['err']);
    // exit;
}
else
{
if($flag){
    
    $query = "UPDATE category SET categoryimage='$file_name',cetegoryname='$name' WHERE id={$_POST['id']}";

}
else
{

    $query = "UPDATE category SET cetegoryname='$name' WHERE id={$_POST['id']}";

}

$res = mysqli_query($conn , $query);

if($res)
{
    $succ[] = "Successfully Upadate Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header("Location:../categorydisplay.php");
}
else
{
    header("Location:../editcategory.php?id=".$_POST['id']."");
}
}
?>