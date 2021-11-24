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
    <form action="models/productproccess.php" method="post" enctype="multipart/form-data">
        Product Image : <input type="file" name="image" class="form-control"/><br>
        Product Name : <input type="text" name="name" class="form-control" placeholder="Enter Your Product Name" /></br>
        Sale Price : <input type="text" name="price" class="form-control" placeholder="Enter Your Product Price" /><br>
        M.R.P : <input type="text" name="mrp" class="form-control" placeholder="Enter Your Product M.R.P" /><br>
        Description : <textarea name="desp" class="form-control" placeholder="Enter Your Description"></textarea><br>
        Quantity : <input type="number" class="form-control" name="number" /><br>
        Category : <select class="form-control" name="categoryname">
          <?php
          $query = "SELECT * FROM category";

          $res = mysqli_query($conn , $query);

          while($row = mysqli_fetch_assoc($res))
          {
          ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['cetegoryname']; ?></option>
          <?php
          }
          ?>
          </select>
          <br>
          Brand : <select class="form-control" name="brand">
          <?php
          $query1 = "SELECT * FROM brand";

          $res1 = mysqli_query($conn , $query1);

          while($row1 = mysqli_fetch_assoc($res1))
          {
          ?>
          <option value="<?php echo $row1['id']; ?>"><?php echo $row1['brandname']; ?></option>
          <?php
          }
          ?>
          </select>
          Item Lenght : <input type="text" name="itemlenght" class="form-control"><br>
          Material : <input type="text" name="material" class="form-control"><br>
          Stone Shape : <input type="text" name="stoneshape" class="form-control"><br>
          Weight : <input type="text" name="weight" class="form-control"><br>
          Gender : <select class="form-control" name="gender">
            <option value="1">Men</option>
            <option value="2">Women</option>
            <option value="3">Kids</option>
        </select>
          Stock : <select class="form-control" name="stock">
            <option value="1">In stock</option>
            <option value="0">Out of stock</option>
        </select>
        <br>
        <input type="submit" value="upload" class="btn btn-primary">
    </form>
</div>
<?php
include 'include/footer.php';
?>