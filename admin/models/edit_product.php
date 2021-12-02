<?php
include_once '../include/connect.php';

extract($_POST);

$err = array();
$succ = array();

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
        $err[] = 'File is not uploaded<br>';
    }
    
    else if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
        $err[] = 'File too large. File must be less than 2 megabytes.';
    }

    if(!in_array($_FILES['image']['type'], $acceptable) && (!empty($_FILES["image"]["type"]))) {
    $err[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
}
}

$file = $_FILES['image'];
$target_dir = PRODUCT_IMAGE_UPLOAD;

$file_name = $file['name'];
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    // header("Location:../productdisplay.php");
    $flag = 1;
}
else
{
    $flag = 0;
}

//product name
if($name=="")
{
    $err[] = "Product name is empty<br>";
}

//price validation
if($price=="")
{
    $err[] = "Price is empty<br>";
}
else if(!(is_numeric($price)))
{
    $err[] = "Price is always numeric formate<br>";
}

//mrp validation
if($mrp=="")
{
    $err[] = "MRP is empty<br>";
}
else if(!(is_numeric($mrp)))
{
    $err[] = "MRP is always numeric<br>";
}

//description validation
if($desp=="")
{
    $err[] = "Description is empty<br>";
}

//quntity validation
if($number=="")
{
    $err[] = "Quntity is empty<br>";
}

//lenght validation
if($itemlenght=="")
{
    $err[] = "Item lenght is empty<br>";
}

//Material validation
if($material=="")
{
    $err[] = "Material is empty<br>";
}

//stoneshap validation
if($stoneshape=="")
{
    $err[] = "Stone shape is empty<br>";
}

//weight validation
if($weight=="")
{
    $err[] = "weight is empty<br>";
}

if(!(empty($err))  && $flag = 0)
{
    $_SESSION['err'] = $err;
}
else
{
if($flag){

    $query = "UPDATE product SET image='$file_name',productname='$name',saleprice='$price',mrp='$mrp',description='$desp',c_id='$categoryname',quantity='$number',brand='$brand',itemlenght='$itemlenght',material='$material',stoneshape='$stoneshape',weight='$weight',gender_type='$gender' WHERE id={$_POST['id']}";

}
else
{

    $query = "UPDATE product SET productname='$name',saleprice='$price',mrp='$mrp',description='$desp',c_id='$categoryname',quantity='$number',brand='$brand',itemlenght='$itemlenght',material='$material',stoneshape='$stoneshape',weight='$weight',gender_type='$gender' WHERE id={$_POST['id']}";


}

$res = mysqli_query($conn , $query);

if($res)
{
    $succ[] = "Successfully Upadate Your record";
    if(!(empty($succ)))
    {
        $_SESSION['succ'] = $succ;
    }
    header("Location:../productdisplay.php");
}
else
{
    header("Location:../editproduct.php?id=".$_POST['id']."");
}
}
?>
