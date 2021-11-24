<?php 
include_once 'include/connect.php';
if(!isset($_SESSION['USER_ID']))
{
  header("Location:login.php");
  exit;
}
include_once 'class/class.order.php';
include_once 'include/header.php';

$cart = new Order;

$user_id = isset($_SESSION['USER_ID']) ? $_SESSION['USER_ID'] : session_id();

if(isset($_GET['id']) && !empty($_GET['id']))
  {
      $order = new Order;

      $del  = $order->delete_cart();  
  }
  
  $cart_pro = $cart->selectFromCart($user_id);
  
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
  <h1 align="center">Add cart</h1>
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
                    <th>Quantity</th>       
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

                $cart = $order->cart();
                // print_r($cart[0]['id']);
                // exit;
                foreach($cart as $row)
                {
                ?>
                
                  <tr>
                    <input type="hidden" value="<?php echo $row['pro_id']; ?>">
                    <td class="valign-center"><?php echo $row['productname']; ?></td>
                    <td><img src="<?php echo PRODUCT_UPLOAD. $row['image']; ?>" height="30%" width="30%"> </td>
                    <td class="valign-center"><input type="number" name="qty[<?php echo $row['pro_id']; ?>]" value="1" min="1" max="<?php echo $row['quantity']; ?>" data-price="<?php echo $row['mrp']; ?>" id="qty" placeholder="0"  class="form-control quantity-input qty" style="width:50px;"></td>
                    <td class="valign-center"><div id="price">$<?php echo $row['mrp']; ?></div></td>                                         
                    <td class="valign-center"><span class="total" data-mrp="<?php echo $row['mrp']; ?>">$<?php echo $row['mrp']; ?></span></td>                                                                    
                    <td class="valign-center"><a href="?id=<?=$row['id']; ?>"><div class="btn btn-danger">Remove</a></td>        
                  </tr>
                
                <?php  
                }
                $order = new Order;

                $cart = $order->cart();
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Subtotal Cost : </td>
                  <td> <span id="grandTotal"></span></td>
                  <td></td>
                </tr>
              </tfoot>
              </table>
              <div class="width_full text-right">
              <input type="submit" value="Proceed to checkout" class="btn btn-danger">
              </form>
              </div>
            </section>
            </div>
            </div>
            </section>
            <script type="text/javascript">
            grandtotal();
              let elementsArray = document.querySelectorAll(".quantity-input");

              elementsArray.forEach(function(elem) {
                  elem.addEventListener("input", function(e) {
                      //this function does stuff
                      // alert("test");
                      let total = event.target.parentElement.parentElement.querySelectorAll('.total')[0];
                      let qty = event.target.value;
                      let price = event.target.getAttribute("data-price");
                      // console.log(qty);
                      // console.log(price);                      
                      // console.log(total);

                      total.innerHTML = '$' + qty*price;
                      total.setAttribute('data-mrp' , qty*price);
                      grandtotal();
                  });
              });
              
              function grandtotal(){
                // alert('test');
                let row = document.querySelectorAll("#table-display tbody tr");

                let totalprice = 0;
              row.forEach(function(elem) {
                // console.log(elem);

                totalprice += parseFloat(elem.querySelectorAll('.total')[0].getAttribute('data-mrp'));
                // console.log(totalprice); 
                document.getElementById("grandTotal").innerHTML ='$' + totalprice;
                  }); 
            }
            </script>
<?php
include 'include/footer.php';
?>