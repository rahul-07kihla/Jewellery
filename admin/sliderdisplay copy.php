<?php
// include_once 'include/connect.php';
// include_once 'class/class.Database.php';
// include_once 'include/header.php';
// include_once 'include/sidebar.php';
echo "<pre>";
print_r($_POST);
exit;
if(isset($_GET['id']) && !empty($_GET['id']))
  {
      $q = "DELETE FROM slider WHERE id={$_GET['id']}";

      $res = mysqli_query($conn , $q);

      header("Location:sliderdisplay.php");
  }
?>
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i> Slider</li>
            </ol>
          </div>
        </div>
<div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                Slider Table
              </header>
              <table id="fac_list" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>FAC Id</th>
                                    <th>Currency</th>
                                    <th>Page Set</th>
                                    <th>Page Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th width="20%">Actions</th>
                                </tr>
                            </thead>
                        </table>
<?php 
include 'include/footer.php';
?>
<script>
  oTable = $('#fac_list').dataTable({
            "dom": "<'row no-gutters'<'col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding'l><'col-xs-12 col-sm-4 col-md-4 col-lg-4'r><'col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding'f>>t<'row no-gutters'<'col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding'i><'col-xs-12 col-sm-4 col-md-4 col-lg-4'><'col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding'p>>",
            "processing": true,
            "serverSide": true,
            "ajax": "demo.php",
            "columnDefs": [
                {"orderable": false, "targets": [2]},
                {"visible": false, "targets": [3]},
            ],
            "order": [[3, "desc"]],
        });
</script>