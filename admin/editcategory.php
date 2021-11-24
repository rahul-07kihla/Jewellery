<?php
include_once 'include/header.php';
include_once 'include/sidebar.php';

$q = "SELECT * FROM category WHERE id={$_GET['id']}";

$res = mysqli_query($conn , $q);

$row = mysqli_fetch_assoc($res);

?>
    <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>
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
    <form action="models/edit_category.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">  
        Category Image : <input type="file" name="image" class="form-control"/><br>
        <img src="<?php echo CATEGORY_UPLOAD . $row['categoryimage']; ?>"><br>
        Category Name : <input type="text" name="name" class="form-control" placeholder="Enter Your Category Name" value="<?php echo $row['cetegoryname']; ?>" /><br>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</div>
<?php
include 'include/footer.php';
?>