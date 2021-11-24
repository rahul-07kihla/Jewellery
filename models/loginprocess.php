<?php
session_start();
include_once '../class/class.login.php';
include_once '../class/class.order.php';

$order = new Order;
$login = new login;

// USER OGIN PROCESS
if (isset($_POST['submit'])) {
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? md5($_POST['password']) : '';

	// CHECK USER IS ID OR PASS IS METCH OR NOT
	$user = $login->userLogin($username, $password);

	if($user['count'] == 1) {
		if ($user['status'] == 1) {
			// CHANGE SESSION ID TO USER ID
			$update = $order->sessionIdToUserId();

			$_SESSION['USER_ID'] = $user['id'];
			$_SESSION['USER_EMAIL'] = $user['email'];
			$_SESSION['USER_NAME'] = $user['username'];
			
			header("location: ../index.php");
			exit();
		}else{
			$_SESSION['err'] = "Wrong username and password";
			header("location: ../login.php");
			exit();
		}
	}else {
		$_SESSION['err'] = "Your Login Name or Password is invalid";
		header("location: ../login.php");
		exit();
	}
}else {
	header("location: ../login.php");
	exit();
}
?>