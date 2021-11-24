<?php 
include_once 'include/connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome To Shopping Online</title>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/grid.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.19.1/jQuery.Validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/custome.js"></script>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>	
<header class="header-main">
  <div class="header-top">
    <div class="container">
      <ul class="header-left-link">
        <?php
        $query = "SELECT * FROM user WHERE id='".$_SESSION['USER_ID']."'";

        $res = mysqli_query($conn, $query);

        $row = mysqli_fetch_assoc($res);
        
        if(isset($_SESSION['USER_ID']))
        {
        ?>
        <li><a href="logout.php">Logout &nbsp<span class="profile-ava"><img src="<?php echo PROFILE_UPLOAD . $row['profile']; ?>" height="50" width="50"></span></a></li><br> 
        <li><div class="text-danger bg-dark">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_SESSION['USER_NAME']; ?></div></li>       
        <?php
        }
        else
        {
        ?>
          <li><a href="login.php"><img alt="" src="assets/image/icon-1.png"> <span>Login</span></a></li>
        <li><a href="signup.php"><img alt="" src="assets/image/icon-2.png"> <span>Not a Member ? <span class="coloryellow">Sign Up</span></span></a></li>
        <?php
        }
        ?>

      </ul>
      <ul class="header-right-link">
        <li><a href="account.php">My Account</a><span>|</span></li>
        <li><a href="wishlist.php">Wishlist</a><span></span></li>
        <!-- <li><a href="#">Delivery</a></li> -->
      </ul>
    </div>
  </div>
  <?php
  $query = "SELECT * FROM logo";
                
  $res = mysqli_query($conn,$query);

  $row = mysqli_fetch_assoc($res);
  ?>
  <div class="header-middle">
    <div class="container">
      <div class="logo"><a href="index.php"><img src="<?php echo LOGO_UPLOAD . $row['logo']; ?>" /></a></div>
      <div class="header-search">
        <input type="text" placeholder="What are you looking?" class="form-control">
        <button><i class="fa fa-search"></i></button>
      </div>
      <div class="header-cart">
        <div class="cart-wrapper"> <a class="btn btn-theme-transparent" href="wishlist.php"><i class="fa fa-heart"></i> <span class="">Wishlist</span></a>  
        <a class="btn btn-theme-transparent" href="add_cart.php"><i class="fa fa-shopping-cart"></i> <span class="">Add Cart</span> </a> </div>
      </div>
    </div>
  </div>
  <div class="width_full menu-border">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a href="index.php">Home</a></li>
            <li><span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a href="shop.php ">Shop</a></li>
            <li><span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a href="#">Blog</a></li>
            <li class="dropdown"> <span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Portfolio <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider" role="separator"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a href="shop.php?value=<?=1?>">Men</a></li>
            <li><span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a href="shop.php?value=<?=2?>">Women</a></li>
            <li><span class="menu-line"><img src="assets/image/menu-line.jpg" /></span><a href="shop.php?value=<?=3?>">Kids</a></li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
      <!--/.container-fluid --> 
    </nav>
  </div>
</header>