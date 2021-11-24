<?php
include_once '../include/connect.php';

extract($_POST);

$err = array();


//username validation
if($iname=="")
{

    $err[] = "Name is empty<br>";
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
$target_dir = SLIDER_IMAGE_UPLOAD;

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
}
else
{

    $query = "INSERT INTO slider(name,image) VALUES ('$iname','$file_name')";
    
}

$res = mysqli_query($conn , $query);

if($res)
{
    $succ[] = "Successfully Inserted Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header("Location:../sliderdisplay.php");
}
else
{
    header("Location:../slider.php");
}
  
?>