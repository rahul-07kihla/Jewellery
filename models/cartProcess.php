<?php
include_once 'class/class.order.php';

$array = array();
$cart = new Order;

if (isset($_POST['qty'])) {
	$update_qty = $cart->updateOuantity($_POST['qty'], $_POST['id']);
	
	$array['success'] = true;
	$array['message'] = 'Cart Update Successfully';
}

$user_id = (isset($_SESSION['USER_ID'])) ? $_SESSION['USER_ID'] : session_id();
$array['count'] = $cart->cartProduct($user_id);

echo json_encode($array);
?>