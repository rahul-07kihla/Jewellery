<?php
include_once 'include/header.php';
?>
      </div>
      <!--/.container-fluid --> 
    </nav>
  </div>
</header>
<section class="inner-page-main">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Shopping Cart</li>
        </ol>
      </div>
      <div class="clear"></div>
      
      <div class="col-md-12">
        <h2 class="product-title">Shopping Cart</h2>
        
        
        <div class="width_full mrgn_20t">
        <div  class="table-responsive">
    <table class="table table-hover table-border">
      <thead>
        <tr>
          <th style="width:50px;"></th>
          <th></th>
          <th>Product Name</th>
          <th>Qty</th>
          <th>Price</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
         <td class="valign-center total-amount text-center"><a href="#"><i class="fa fa-times"></i></a></td>
          <td class="valign-center" ><div class="cart-product-img"><img src="image/1.jpg"></div></td>
          <td class="valign-center" >3D Blu-ray Disc™ Player (BD-D7500)</td>
          <td valign="middle" class="valign-center"><input type="text" placeholder="1" id="usr" class="form-control quantity-input" style="width:50px;"></td>
          <td class="valign-center total-amount">$120.00</td>
          
        </tr>
        
        <tr>
          <td class="valign-center total-amount text-center"><a href="#"><i class="fa fa-times"></i></a></td>
          <td class="valign-center" ><div class="cart-product-img"><img src="image/2.jpg"></div></td>
          <td class="valign-center" >There are many variations of passages </td>
          <td valign="middle" class="valign-center"><input type="text" placeholder="1" id="usr" class="form-control quantity-input" style="width:50px;"></td>
          <td class="valign-center total-amount">$50.00</td>
        </tr>
        
        <tr>
          <td class="valign-center total-amount text-center"><a href="#"><i class="fa fa-times"></i></a></td>
          <td class="valign-center" ><div class="cart-product-img"><img src="image/3.jpg"></div></td>
          <td class="valign-center" >Lorem ipsum dolor sit amet, conse adipiscing</td>
          <td valign="middle" class="valign-center"><input type="text" placeholder="1" id="usr" class="form-control quantity-input" style="width:50px;"></td>
          <td class="valign-center total-amount">$54.00</td>
        </tr>
        
        <tr>
          <td class="valign-center total-amount text-center"><a href="#"><i class="fa fa-times"></i></a></td>
          <td class="valign-center" ><div class="cart-product-img"><img src="image/4.jpg"></div></td>
          <td class="valign-center" >3D Blu-ray Disc™ Player (BD-D7500)</td>
          <td valign="middle" class="valign-center"><input type="text" placeholder="1" id="usr" class="form-control quantity-input" style="width:50px;"></td>
          <td class="valign-center total-amount">$224.00</td>
        </tr>
        
        <tr class="total-amount-footer ">
          <td colspan="4" class="valign-center text-right valign-center">
         Shipping Charge :
          </td>
          <td class="valign-center total-amount freecharge-text">FREE</td>
        </tr>
        
        <tr class="total-amount-footer valign-center" style="border-top:solid 2px #fff;">
          <td colspan="4" class="valign-center text-right">
          <div class="pull-left">
          <form class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Apply Coupon Code">
          </div>
          <button type="submit" class="btn btn-success">Apply</button>
        </form>
          </div>
          
         <span class="mrgn_5t" style="display:inline-block;">Total Cost :</span>
          </td>
          <td class="valign-center total-amount freecharge-text">$560.00</td>
        </tr>
        
        
      </tbody>
    </table>
  </div>
  
  <div class="width_full text-right">
   <a href="#" class="proceed-checkout-btn continue-shopping-btn">Continue Shopping</a>
  <a href="#" class="proceed-checkout-btn">Proceed to Checkout</a>
  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include 'include/footer.php';
?>