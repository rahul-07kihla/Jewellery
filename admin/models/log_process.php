<?php
session_start();
include '../class/class.login.php';

$adminlogin = new Login();


if (isset($_POST['submit'])) {
	$username = isset($_POST['unm']) ? $_POST['unm'] : '';
	$password = isset($_POST['pwd']) ? $_POST['pwd'] : '';

    $user = $adminlogin->login1($username,$password);
	
		if (isset($user['username']) && $user['status']==1 ) {

			$_SESSION['ADMIN_ID'] = $user['id'];
			$_SESSION['ADMIN_NAME'] = $user['username'];
			$_SESSION['ADMIN_PASSWORD'] = $user['password'];

			header("location: ../index.php");
			exit();
		}else{
			$_SESSION['err'] = "Wrong username and password";
			header("location: ../login.php");
			exit();
		}
		
}else {
	echo "error";
	exit();
}
?>