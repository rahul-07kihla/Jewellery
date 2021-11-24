<?php
include_once 'include/connect.php';
if(!isset($_SESSION['USER_ID']))
{
    header("Location:login.php");
}
 
include_once 'class/class.order.php';
include_once 'include/header.php';

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$cart = new Order;

$user_id = isset($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : session_id();

if(isset($_GET['id']) && !empty($_GET['id']))
  {
      $order = new Order;

      $del  = $order->delete_wishlist();  
  }
  
  $cart_pro = $cart->selectwishlist($user_id);

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
        if(isset($_SESSION['succ1']))
        {
          foreach($_SESSION['succ1'] as $s1)
          ?>
          <div class="alert alert-danger" style="margin-left: 106px;margin-right: 106px;overflow:hidden;">
          <?php echo $s1; ?>
          </div>
          <?php
          }
          ?>
	<h1 align="center">Wishlist</h1>
<div class="row">
          <div class="width_full mrgn_20t">
            <section class="panel">
              <div class="table-responsive">
              <form method="post" action="models/buynow.php">
              <table class="table table-hover table-border" id="table-display">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Iamge</th>      
                    <th>M.R.P</th>
                    <th>Total</th>             
                  </tr>
                </thead>
                <tbody>
                <?php
                $price = 0;
                $totalprice = 0; 
                foreach($cart_pro as $key => $value) {
                  // print_r($cart_pro);
                  // exit;
                // $price = $value['mrp'] * $value['quantity'];
                $totalprice += $price;
                }
                $order = new Order;

                $cart = $order->wishlist();
                // print_r($cart[0]['id']);
                // exit;
                foreach($cart as $row)
                {
                ?>
                
                  <tr>
                    <input type="hidden" value="<?php echo $row['pro_id']; ?>">
                    <td class="valign-center"><?php echo $row['productname']; ?></td>
                    <td><img src="<?php echo PRODUCT_UPLOAD. $row['image']; ?>" height="30%" width="30%"> </td>
                    <td class="valign-center"><div id="price">$<?php echo $row['mrp']; ?></div></td>                                         
                    <td class="valign-center"><span class="total" data-mrp="<?php echo $row['mrp']; ?>">$<?php echo $row['mrp']; ?></span></td>                                                                    
                    <td class="valign-center"><a href="?id=<?=$row['id']; ?>"><div class="btn btn-danger">Remove</a></td>        
                  </tr>
                
                <?php  
                }
                $order = new Order;

                $cart = $order->wishlist();
                ?>
                </tbody>
                <tfoot>
              </tfoot>
              </table>
              <div class="width_full text-right">
              </form>
              </div>
            </section>
            </div>
            </div>
            </section>
<?php 
include 'include/footer.php';
?>