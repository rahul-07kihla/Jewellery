<?php
include_once 'include/connect.php';
if(!isset($_SESSION['USER_ID']))
{
    header("Location:login.php");
}
include_once 'class/class.Database.php';
include_once 'class/class.order.php';
include_once 'include/header.php';


$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$query = "SELECT * FROM `user` WHERE id = '".$_SESSION['USER_ID']."'";
// print_r($query);
// exit;

$res = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($res);
?>
<h1 align="center">My Account</h1>
<table border=1px align="center">
    <tr>
        <td>Profile picture : </td>
        <td><img src="<?php echo PROFILE_UPLOAD . $row['profile']; ?>"></td>
    <tr>
        <td>Username : </td>
        <td><?php echo $row['username']; ?></td>
    </tr>
    <tr>
        <td>Email : </td>
        <td><?php echo $row['email']; ?></td>
    </tr>
</table>
>br>
<?php 
include 'include/footer.php';
?>