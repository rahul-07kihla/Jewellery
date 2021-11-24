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
    <h2 class="product-title mrgn_40b">Checkout Details</h2>
    
    <article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div data-wow-duration="1s" class="box-border block-form wow fadeInLeft animated" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills  nav-justified">
                                        <li class="active"><a data-toggle="tab" href="#address"><i class="fa fa-thumb-tack"></i>Billing Address</a></li>
                                        <li><a class="disabled" data-toggle="tab" href="#shipping"><i class="fa fa-truck"></i>Shipping Method</a></li>
                                        <li><a data-toggle="tab" href="#payment"><i class="fa fa-money"></i>Payment Method</a></li>
                                        <li><a data-toggle="tab" href="#review"><i class="fa fa-check"></i>Order Review</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="address" class="tab-pane active">
                                            <br>
                                            <h3>Account &amp; Billing Details</h3>
                                            <hr>
                                            <form action="#" method="post" role="form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputFirstName">First Name:<span class="text-error">*</span></label>
                                                            <div>
                                                                <input type="text" id="inputFirstName" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputLastName">Last Name:<span class="text-error">*</span></label>
                                                            <div>
                                                                <input type="text" id="inputLastName" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputEMail">E-Mail:<span class="text-error">*</span></label>
                                                            <div>
                                                                <input type="email" id="inputEMail" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputPhone">Phone:</label>
                                                            <div>
                                                                <input type="text" id="inputPhone" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputFax">Fax:</label>
                                                            <div>
                                                                <input type="text" id="inputFax" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputCompany">Company:</label>
                                                            <div>
                                                                <input type="text" id="inputCompany" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputAdress1">Address /1: <span class="text-error">*</span></label>
                                                            <div>
                                                                <input type="text" id="inputAdress1" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label" for="inputCity">City: <span class="text-error">*</span></label>
                                                            <div>
                                                                <input type="text" id="inputCity" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label" for="inputPostCode">Post Code: <span class="text-error">*</span></label>
                                                            <div>
                                                                <input type="text" id="inputPostCode" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Contury: <span class="text-error">*</span></label>

                                                                    <div>
                                                                        <select class="form-control" name="inputContury">
                                                                            <option value="#">-Conturies-</option>
                                                                            <option value="#">Contury1</option>
                                                                            <option value="#">Contury2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Region: <span class="text-error">*</span></label>
                                                                    <div>
                                                                        <select class="form-control" name="inputRegion">
                                                                            <option value="#">-Regions-</option>
                                                                            <option value="#">Region1</option>
                                                                            <option value="#">Region2</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <a class="btn-default-1" href="#">Back</a>
                                            <a class="btn-default-1" href="#">Next</a>
                                        </div>
                                        <div id="shipping" class="tab-pane">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3>Free</h3>
                                                    <hr>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                    </p>
                                                    <div class="radio">
                                                        <label class="color-active">
                                                            <input type="radio" value="0" id="shipping1" name="shipping">
                                                            Free
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Standart</h3>
                                                    <hr>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                    </p>
                                                    <div class="radio">
                                                        <label class="color-active">
                                                            <input type="radio" value="0" id="shipping2" name="shipping">
                                                            $5 Rate
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Speed</h3>
                                                    <hr>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                    </p>
                                                    <div class="radio">
                                                        <label class="color-active">
                                                            <input type="radio" value="0" id="shipping3" name="shipping">
                                                            $15 Rate
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <a class="btn-default-1" href="#">Back</a>
                                            <a class="btn-default-1" href="#">Next</a>
                                        </div>
                                        <div id="payment" class="tab-pane">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h3>Pay Pal</h3>
                                                    <hr>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                    </p>
                                                    <div class="radio">
                                                        <label class="color-active">
                                                            <input type="radio" value="0" id="payment1" name="payment">
                                                            Pay Pal
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Visa Card</h3>
                                                    <hr>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                    </p>
                                                    <div class="radio">
                                                        <label class="color-active">
                                                            <input type="radio" value="0" id="payment2" name="payment">
                                                            Visa Card
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h3>Stripe</h3>
                                                    <hr>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit ollit anim id est laborum.
                                                    </p>
                                                    <div class="radio">
                                                        <label class="color-active">
                                                            <input type="radio" value="0" id="payment3" name="payment">
                                                            Stripe
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <a class="btn-default-1" href="#">Back</a>
                                            <a class="btn-default-1" href="#">Next</a>
                                        </div>
                                        <div id="review" class="tab-pane">
                                            <br>
                                            <h3>Review</h3>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table table-hover table-border">
      <thead>
        <tr>
          <th></th>
          <th>Product Name</th>
          <th>Qty</th>
          <th>Price</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="valign-center"><div class="cart-product-img"><img src="image/1.jpg"></div></td>
          <td class="valign-center">3D Blu-ray Disc&trade; Player (BD-D7500)</td>
          <td valign="middle" class="valign-center"><input type="text" style="width:50px;" class="form-control quantity-input" id="usr" placeholder="1"></td>
          <td class="valign-center total-amount">$120.00</td>
          
        </tr>
        
        <tr>
          <td class="valign-center"><div class="cart-product-img"><img src="image/2.jpg"></div></td>
          <td class="valign-center">There are many variations of passages </td>
          <td valign="middle" class="valign-center"><input type="text" style="width:50px;" class="form-control quantity-input" id="usr" placeholder="1"></td>
          <td class="valign-center total-amount">$50.00</td>
        </tr>
        
        <tr>
          <td class="valign-center"><div class="cart-product-img"><img src="image/3.jpg"></div></td>
          <td class="valign-center">Lorem ipsum dolor sit amet, conse adipiscing</td>
          <td valign="middle" class="valign-center"><input type="text" style="width:50px;" class="form-control quantity-input" id="usr" placeholder="1"></td>
          <td class="valign-center total-amount">$54.00</td>
        </tr>
        
        <tr>
          <td class="valign-center"><div class="cart-product-img"><img src="image/4.jpg"></div></td>
          <td class="valign-center">3D Blu-ray Disc&trade; Player (BD-D7500)</td>
          <td valign="middle" class="valign-center"><input type="text" style="width:50px;" class="form-control quantity-input" id="usr" placeholder="1"></td>
          <td class="valign-center total-amount">$224.00</td>
        </tr>
        
      </tbody>
    </table>
                                                </div>
                                            </div>
                                            <hr>
                                            <a class="btn-default-1" href="#">Pay</a>
                                        </div>
                                    </div>



                                </div>
                            </article>
                            
                            
                            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div data-wow-duration="1s" class="block-form block-order-total box-border wow fadeInRight animated" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;">
                                    <h3><i class="fa fa-dollar"></i>Total</h3>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li>Sub Total: <strong>$500.00</strong></li>
                                        <li>Pricing Sharge: <strong>$10.00</strong></li>
                                        <li>Promotion Discound: <strong>$5.00</strong></li>
                                        <li>VAT: <strong>$10.00</strong></li>
                                        <li><hr></li>
                                        <li class="active"><b>Total:</b> <strong>$520.00</strong></li>                                    
                                    </ul>
                                </div>
                            </article>
    
    
    </div>
    
    </div>
    
    
  </div>
</section>
<?php
include 'include/footer.php';
?>