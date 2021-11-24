<?php 
include_once 'include/header.php';
include_once 'class/class.order.php';

if(isset($_GET['id']) && !empty($_GET['id']))
  {  
    $order = new Order;
    
    $del = $order->delete();
  }
?>
<section id="main-content">
        <?php
        if(isset($_SESSION['succ']))
        {
          foreach($_SESSION['succ'] as $s)
          ?>
          <div class="alert alert-success" style="margin-left: 106px;margin-right: 106px;overflow:hidden;">
          <?php echo $s; ?>
          </div>
          <?php
          }
          ?>
<h1 align="center">My order</h1>
<div class="row">
          <div class="col-sm-9">
            <section class="panel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Iamge</th>
                    <th>Remove</th>
                    <th>Procced To Check Out</th>
                  </tr>
                </thead>
                <?php
                $order = new Order();

                $buy = $order->buy_now();
                
                while($row = mysqli_fetch_assoc($buy))
                {
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['productname']; ?></td>
                    <td><img src="<?php echo PRODUCT_UPLOAD. $row['image']; ?>" height=100% width=100%> </td>
                    <td><a href="?id=<?=$row['id']; ?>"><button class="btn btn-danger">Remove</button></a></td>
                    <td><a href="?id=<?=$row['id']; ?>"><button class="btn btn-primary">Procced To Check Out</button></a></td>
                  </tr>
                </tbody>
                <?php
                }
                ?>
              </table>
            </section>
            </div>
            </div>
            </section>
<?php
include 'include/footer.php';
?>