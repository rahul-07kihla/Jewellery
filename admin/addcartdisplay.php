<?php
include_once 'include/connect.php';
if(!isset($_SESSION['ADMIN_ID'])){
  header("Location:login.php");
}
include_once 'include/header.php';
include_once 'include/sidebar.php';

if(isset($_GET['id']) && !empty($_GET['id']))
  {
      $q = "DELETE FROM add_cart WHERE id={$_GET['id']}";

      $res = mysqli_query($conn , $q);

      header("Location:addcartdisplay.php");
  }
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Cart Listing</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i> Cart</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Cart Table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Iamge</th>
                    <th>Status</th>
                    <!-- <th>Edit</th> -->
                    <th>Delete</th>
                  </tr>
                </thead>
                <?php
                $query = "SELECT add_cart.id,product.productname,product.image,add_cart.status,user.username FROM `add_cart` JOIN product ON product.id=add_cart.p_id JOIN user ON user.id=add_cart.user_id";
                
                $res = mysqli_query($conn , $query);
                
                while($row = mysqli_fetch_assoc($res))
                {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['productname']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><img src="<?php echo PRODUCT_UPLOAD. $row['image']; ?>" height=100% width=100%> </td>
                    <?php
                    if($row['status']==1)
                    {
                      ?>
                      <td><a href="models/.php?id=<?= $row['id']; ?>&type=status&type2=1"><button class="btn btn-success">Active</button></a></td>
                    <?php
                    }
                    if($row['status']==0)
                    {
                    ?>
                    <td><a href="models/.php?id=<?=$row['id']; ?>&type=status&type2=0"><button class="btn btn-warning">Inactive</button></a></td>
                    <?php
                    }
                    ?>
                    <!-- <td><a href="editslider.php?id="><button class="btn btn-primary">Edit</button></td> -->
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