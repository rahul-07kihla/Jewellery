<?php
include_once '../class/class.database.php';
include_once '../class/class.order.php';

extract($_POST);

$order = new Order;

$user_id = $_SESSION['USER_ID'];

$p_id = isset($_POST['id']) ? $_POST['id'] : '';


$proorder = $order->order_now($user_id);

$order_products = $order->order_items($qty, $proorder);

// SELECT * FROM `order_items` JOIN product ON order_items.p_id=product.id JOIN orders ON orders.id=order_items.order_id
// SELECT orders.id,order_items.order_id,product.productname,order_items.quantity,order_items.unit_price FROM `order_items` JOIN product ON order_items.p_id=product.id JOIN orders ON orders.id=order_items.order_id
// SELECT user.username,orders.id,order_items.order_id,product.productname,order_items.quantity,order_items.unit_price,order_items.status,product.image FROM `order_items` JOIN product ON order_items.p_id=product.id JOIN orders ON orders.id=order_items.order_id JOIN user ON user.id=orders.user_id;
?>