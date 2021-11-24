<?php
include_once '../include/connect.php';

extract($_POST);

$err = array();
$succ = array();

//image validation
if(isset($_FILES['image'])) {
    $errors     = array();
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

if(!(empty($err)))
{
    $_SESSION['err'] = $err;
    // print_r($_SESSION['err']);
    // exit;
}

$file = $_FILES['image'];
$target_dir = LOGO_IMAGE_UPLOAD;

$file_name = $file['name'];
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    header("Location:../logo.php");
    $flag = 1;
}
else
{
    $flag = 0;
}
if($flag){

    $q = "UPDATE logo SET logo='$file_name'";

    $res = mysqli_query($conn , $q);

    if($res)
    {
        $succ[] = "Successfully Updated Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
        header("Location:../logo.php");    
    }

}
else if($flag == 0)
{
    header("Location:../logo.php");
    $_SESSION['err'];
?>
<?php
}
?>