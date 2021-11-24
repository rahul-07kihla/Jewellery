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
              <li><i class="fa fa-th-list"></i>Product</li>
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
    <form action="models/brandproccess.php" method="post" enctype="multipart/form-data">
        Brand Name : <input type="text" name="name" class="form-control" placeholder="Enter Your Brand Name" /></br>
        <input type="submit" value="upload" class="btn btn-primary">
    </form>
</div>
<?php
include 'include/footer.php';
?>