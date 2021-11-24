<?php
include_once 'include/connect.php';
if(!isset($_SESSION['ADMIN_ID'])){
  header("Location:login.php");
}
include_once 'include/header.php';
include_once 'include/sidebar.php';

if(isset($_GET['id']) && !empty($_GET['id']))
  {
      $q = "DELETE FROM `product` WHERE id={$_GET['id']}";

      $res = mysqli_query($conn , $q);

      header("Location:productdisplay.php");
  }
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Product Listing</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i> Product</li>
            </ol>
          </div>
        </div>
        <?php
        if(isset($_SESSION['succ']))
        {
          foreach($_SESSION['succ'] as $s)
          ?>
          <div class="alert alert-success">
          <?php echo $s; ?>
          </div>
          <?php
          }
          ?>
<div class="row">
          <div class="col-sm-25">
            <section class="panel">
              <header class="panel-heading">
              Product Table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Product Images</th>
                    <th>Product Name</th>
                    <th>Product sale price</th>
                    <th>Product M.R.P</th>
                    <th>Product Desription</th>
                    <th>Product Quantity</th>
                    <th>Brand</th>
                    <th>Item lenght</th>
                    <th>Material</th>
                    <th>Stone Shape</th>
                    <th>Wight</th>
                    <th>Gender</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <?php
                $query = "SELECT product.c_id,product.id,category.cetegoryname,product.productname,product.productname,product.saleprice,product.mrp,product.description,product.quantity,product.status,product.image,product.brand,product.itemlenght,product.material,product.stoneshape,product.weight,product.stock,brand.brandname,product.gender_type FROM product JOIN category ON product.c_id=category.id JOIN brand ON product.brand=brand.id";
                
                $res = mysqli_query($conn,$query);

                while($row = mysqli_fetch_assoc($res))
                {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['cetegoryname']; ?></td>
                    <td><img src="<?php echo PRODUCT_UPLOAD. $row['image']; ?>" height=100% width=100%> </td>
                    <td><?php echo $row['productname']; ?></td>
                    <td>$<?php echo $row['saleprice']; ?></td>
                    <td>$<?php echo $row['mrp']; ?></td>
                    <td><?php echo substr($row['description'],0,15); ?>...</td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['brandname']; ?></td>
                    <td><?php echo $row['itemlenght']; ?></td>
                    <td><?php echo $row['material']; ?></td>
                    <td><?php echo $row['stoneshape']; ?></td>
                    <td><?php echo $row['weight']; ?></td>
                    <td><?php 
                          $gender = $row['gender_type']; 
                          $row['gender_type'] = ["1"=>"Men","2"=>"Women","3"=>"Kids"]; 
                          echo $row['gender_type'][$gender];
                    ?></td>
                    <td>
                    <?php 
                    if($row['stock']==1)
                    {
                    ?>
                    <a href="models/productstatus.php?s_id=<?= $row['id']; ?>&type3=stock&type4=1"><button class="btn btn-info">In stock</button></td></a>
                    <?php
                    }
                    else
                    {
                    ?>
                    <a href="models/productstatus.php?s_id=<?= $row['id']; ?>&type3=stock&type4=0"><button class="btn btn-danger">Out Of Stock</button></td></a>
                    <?php
                    }
                    if($row['status']==1)
                    {
                      ?>
                      <td><a href="models/productstatus.php?id=<?= $row['id']; ?>&type3=status&type2=1"><button class="btn btn-success">Active</button></a></td>
                    <?php
                    }
                    if($row['status']==0)
                    {
                    ?>
                    <td><a href="models/productstatus.php?id=<?=$row['id']; ?>&type3=status&type2=0"><button class="btn btn-warning">Inactive</button></a></td>
                    <?php
                    }
                    ?>
                    <td><a href="editproduct.php?id=<?=$row['id']?>"><button class="btn btn-primary">Edit</button></a></td>
                    <td><a href="?id=<?=$row['id']; ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>
                  </tr>
                </tbody>
                <?php
                }
                ?>
              </table>
<?php 
include 'include/footer.php';
?>