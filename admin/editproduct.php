<?php
include_once 'include/connect.php';
include_once 'include/header.php';
include_once 'include/sidebar.php';

$q = "SELECT product.c_id,product.id,category.cetegoryname,product.productname,product.productname,product.saleprice,product.mrp,product.description,product.quantity,product.status,product.image,product.brand,product.itemlenght,product.material,product.stoneshape,product.weight,product.stock,brand.brandname,product.gender_type FROM product JOIN category ON product.c_id=category.id JOIN brand ON product.brand=brand.id WHERE product.id={$_GET['id']}";

$res = mysqli_query($conn , $q);

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
    <form action="models/edit_product.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        Product Image : <input type="file" name="image" class="form-control"/><br>
        <img src="<?php echo PRODUCT_UPLOAD . $row['image']; ?>"><br>
        Product Name : <input type="text" name="name" class="form-control" placeholder="Enter Your Product Name" value="<?php echo $row['productname']; ?>" ></br>
        Sale Price : <input type="text" name="price" class="form-control" placeholder="Enter Your Product Price" value="<?php echo $row['saleprice']; ?>" ><br>
        M.R.P : <input type="text" name="mrp" class="form-control" placeholder="Enter Your Product M.R.P" value="<?php echo $row['mrp']; ?>" ><br>
        Description : <textarea name="desp" class="form-control" placeholder="Enter Your Description"><?php echo $row['description']; ?></textarea><br>
        Quantity : <input type="number" class="form-control" name="number" value="<?php echo $row['quantity']; ?>" ><br>
        Category : <select class="form-control" name="categoryname" value="<?php echo $row['id']; ?>">
          <?php
          $query = "SELECT * FROM category";

          $res = mysqli_query($conn , $query);

          while($row1 = mysqli_fetch_assoc($res))
          {
          ?>
          <option  value="<?php echo $row1['id'] ?>" <?php if($row['c_id']==$row1['id']){echo "selected";} ?>><?php echo $row1['cetegoryname']; ?></option>
          <?php
          }
          ?>
          </select>
          <br>
        Brand : <select class="form-control" name="brand">
          <?php
          $query1 = "SELECT * FROM brand";

          $res1 = mysqli_query($conn , $query1);

          while($row2 = mysqli_fetch_assoc($res1))
          {
          ?>
          <option value="<?php echo $row2['id']; ?>"  <?php if($row['brand']==$row2['id']){ echo "selected"; } ?>><?php echo $row2['brandname']; ?></option>
          <?php
          }
          ?>
          </select>
        Item Lenght : <input type="text" name="itemlenght" class="form-control" value="<?php echo $row['itemlenght']; ?>"><br>
          Material : <input type="text" name="material" class="form-control" value="<?php echo $row['material']; ?>"><br>
          Stone Shape : <input type="text" name="stoneshape" class="form-control" value="<?php echo $row['stoneshape']; ?>"><br>
          Weight : <input type="text" name="weight" class="form-control" value="<?php echo $row['weight']; ?>"><br>
          Gender : <select class="form-control" name="gender">
            <option value="1" <?php  if($row['gender_type']==1){echo "selected";} ?>>Men</option>
            <option value="2" <?php  if($row['gender_type']==2){echo "selected";}?>>Women</option>
            <option value="3" <?php  if($row['gender_type']==3){echo "selected";}?>>Kids</option>
        </select>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</div>
<?php
include 'include/footer.php';
?>