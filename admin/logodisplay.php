<?php
include_once 'include/connect.php';
if(!isset($_SESSION['ADMIN_ID'])){
  header("Location:login.php");
}
include_once 'include/header.php';
include_once 'include/sidebar.php';
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Logo</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Logo Table
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Logo</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <?php
                $query = "SELECT * FROM logo";
                
                $res = mysqli_query($conn,$query);

                $row = mysqli_fetch_assoc($res);
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><img src="<?php echo LOGO_UPLOAD . $row['logo']; ?>" height=100% width=100%></td>
                    <td><a href="logo.php?id=<?=$row['id']; ?>"><button class="btn btn-primary">Change</button></td>
                  </tr>
                </tbody>
              </table>
<?php 
include 'include/footer.php';
?>