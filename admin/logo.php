<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';

$query = "SELECT * FROM logo WHERE id=1";

$res = mysqli_query($conn , $query);

$row = mysqli_fetch_assoc($res);
?>
<body>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Logo</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Logo</li>
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
    <form action="models/logochange.php" method="post" enctype="multipart/form-data">
        Logo : <input type="file" name="image" class="form-control"/><br>
        <img src="<?php echo LOGO_UPLOAD . $row['logo']; ?>" alt="logo">
        <br>
        <input type="submit" value="Change" class="btn btn-primary">
    </form>
</div>
<?php
include 'include/footer.php';
?>