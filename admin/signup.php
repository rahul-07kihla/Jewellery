<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>
<body>  
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i> User</li>
            </ol>
          </div>
        </div>
        <?php
        if(isset($_SESSION['err']))
        {
          foreach($_SESSION['err'] as $e)
            {
            ?>
            <div class="alert alert-danger">
            <strong><?php echo $e; ?></strong>
            </div>
            <?php
          }
        } 
        ?>
    <div class="container">          
  <h1>Sign up</h1>
    <form action="models/signproccess.php"method="post" enctype="multipart/form-data">
      Profile : <input type="file" name="image" class="form-control"><br>
      User name : <input type="text" name="username" class="form-control"><br>
      Email : <input type="text" name="email" class="form-control"><br>
      Password : <input type="password" name="pwd" class="form-control"><br>
      Confirm Password : <input type="password" name="cpwd" class="form-control"><br>
      <input type="submit" value="Sign up" class="btn btn-primary">
    </form>
<?php
include 'include/footer.php';
?>