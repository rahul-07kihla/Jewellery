<?php
include_once 'include/connect.php';
if(!isset($_SESSION['ADMIN_ID'])){
  header("Location:login.php");
}
include_once 'include/header.php';
include_once 'include/sidebar.php';

if(isset($_GET['id']) && !empty($_GET['id']))
{
      $q = "DELETE FROM wishlist WHERE id={$_GET['id']}";
        // print_r($q);
        // exit;
      $res = mysqli_query($conn , $q);

      header("Location:buy.php");
}
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> WishListing</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i> Order</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-sm-10">
            <section class="panel">
              <header class="panel-heading">
                Wishlist Table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Product Image</th>
                    <th>Produt Name</th>
                    <th>Customer Name</th>
                    <th>Price</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <?php
                $query = "SELECT wishlist.id  as wid ,product.productname,user.username,product.mrp,product.image from wishlist JOIN product ON product.id=wishlist.p_id JOIN user ON user.id=wishlist.u_id";
                
                $res = mysqli_query($conn , $query);
                
                while($row = mysqli_fetch_assoc($res))
                {
                ?>
                <tbody>
                  <tr>
                    <td><img src="<?php echo PRODUCT_UPLOAD . $row['image']; ?>"></td>
                    <td><?php echo $row['productname']; ?>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['mrp']; ?></td>                    
                    <!-- <td><a href="editslider.php?id="><button class="btn btn-primary">Edit</button></td> -->
                    <td><a href="?id=<?=$row['wid']; ?>"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a></td>
                  </tr>
                </tbody>
                <?php
                }
                ?>
              </table>
<?php 
include 'include/footer.php';
?>