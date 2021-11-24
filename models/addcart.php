<?php
include_once '../class/class.Database.php';
include_once '../class/class.order.php';

$add_cart = new Order;

// echo $id;
$user_id = isset($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : session_id();
$p_id = isset($_POST['id']) ? $_POST['id'] : '';
if(!isset($_SESSION['USER_ID'])){
    header("Location:../login.php");
    exit;
   }
$order = $add_cart->productAddCart($p_id,$user_id);

if($order)
{
    header("location: ../add_cart.php");
}

?>