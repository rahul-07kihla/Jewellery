<?php
include_once 'include/connect.php';
if(!isset($_SESSION['ADMIN_ID'])){
  header("Location:login.php");
}
include_once 'include/header.php';
include_once 'include/sidebar.php';

if(isset($_GET['id']) && !empty($_GET['id']))
  {
      $q = "DELETE FROM category WHERE id={$_GET['id']}";

      $res = mysqli_query($conn , $q);

      header("Location:categorydisplay.php");
  }

?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Category Listing</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i> Category</li>
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
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
              Category Table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Category Images</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <?php
                $query = "SELECT * FROM category";
                
                $res = mysqli_query($conn,$query);

                while($row = mysqli_fetch_assoc($res))
                {
                ?>
                <tbody>
                  <tr>
                    <td><img src="<?php echo CATEGORY_UPLOAD. $row['categoryimage']; ?>" height=100% width=100%> </td>
                    <td><?php echo $row['cetegoryname']; ?></td>
                    <?php
                    if($row['status']==1)
                    {
                      ?>
                      <td><a href="models/categorystatus.php?id=<?=$row['id']; ?>&type=status&type2=1"><button class="btn btn-success">Active</button></a></td>
                    <?php
                    }
                    if($row['status']==0)
                    {
                    ?>
                    <td><a href="models/categorystatus.php?id=<?=$row['id']; ?>&type=status&type2=0"><button class="btn btn-warning">Inactive</button></a></td>
                    <?php
                    }
                    ?>
                    <td><a href="editcategory.php?id=<?=$row['id']; ?>"><button class="btn btn-primary">Edit</button></a></td>
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