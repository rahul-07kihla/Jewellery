<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';

$query = "SELECT * FROM slider WHERE id={$_GET['id']}";

$res = mysqli_query($conn , $query);

$row = mysqli_fetch_assoc($res);
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
              <li><i class="fa fa-th-list"></i>Slider</li>
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
    <form action="models/edit_slider.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        Image Name : <input type="text" name="iname" placeholder="Enter your imagename" autofocus class="form-control" value="<?php echo $row['name']; ?>"/><br>
        Image : <input type="file" name="image" class="form-control"/><br>
        <img src="<?php echo SLIDER_UPLOAD . $row['image']; ?>"><br>
        <br>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</div>
<?php
include 'include/footer.php';
?>