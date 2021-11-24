<?php
include_once 'include/header.php';
include_once 'class/class.product.php';

if (isset($_SESSION['USER_ID'])) {
	header("location:".$_SESSION['REFERER']);
}

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$product = new Product;

$pro = $product->productdisplay();

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// echo $_SESSION['REFERER'];
// exit;
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
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Jewelry</a></li>
          <li class="active"><?php echo $pro['cetegoryname']; ?></li>
        </ol>
      </div>
      <div class="clear"></div>
      <div class="col-md-4">
        <div id="gallery1" class="photo-gallery">
          <div class="current-photo"> <img class="zoom_01" src="<?php echo PRODUCT_UPLOAD . $pro['image']; ?>"> </div>
          <div class="photo-list">
            <ul>
              <li data-src="image/product-detail-1.jpg"> <img src="<?php echo PRODUCT_UPLOAD . $pro['image']; ?>" title="" alt="" /> </li>
              <li data-src="image/product-detail-2.jpg"> <img src="image/product-detail-2.jpg" title="" alt="" /> </li>
              <li data-src="image/product-detail-3.jpg"> <img src="image/product-detail-3.jpg" title="" alt="" /> </li>
              <li data-src="image/product-detail-4.jpg"> <img src="image/product-detail-4.jpg" title="" alt="" /> </li>
              <li data-src="image/product-detail-5.jpg"> <img src="image/product-detail-5.jpg" title="" alt="" /> </li>
              <li data-src="image/product-detail-6.jpg"> <img src="image/product-detail-6.jpg" title="" alt="" /> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h1 class="product-title"><?php echo $pro['productname']; ?></h1>
        <div class="product-price-text"><span class="normalprice">$<?php echo $pro['saleprice']; ?></span>$<?php echo $pro['mrp']; ?><span class="productPriceDiscount">20% off</span></div>
        <div class="width_full mrgn_20b mrgn_20t">
          <hr class="hr-line">
          <p class="pd_10t"><?php echo $pro['description']; ?></p>
          <hr class="hr-line">
        </div>
        <div class="width_full mrgn_20b">
          <!-- <div class="col-sm-3 mrgn_10b select-color"> -->
            <!-- <label class="lable-widht">Color</label>
            <span class="color-blue"></span> <span class="color-red"></span> <span class="color-yellow"></span> <span class="color-green"></span> </div> -->
          <div class="col-sm-3 mrgn_10b">
            <div class="width_full">
              <!-- <label for="sel1" class="lable-widht">Select Size:</label> -->
              <!-- <div class="select-size-select"> -->
                <!-- <select class="form-control" id="">
                  <option>Please Select</option>
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                  <option>XXL</option>
                </select> -->
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-3 mrgn_10b">
            <div class="width_full">
              <label for="sel1" class="lable-widht">Quantity</label>
              <div class="">
                <form action="" method="post">
                <input type="number" class="form-control quantity-input" id="usr" placeholder="1" name="quatity">
                </form>
              </div>
            </div>
          </div> -->
                    
          <div class="width_full mrgn_25t">
          
          <!-- <div class="col-sm-4"><span class="free-shipping-text"><i class="fa fa-check-square"></i> Free Shipping</span></div>
          <div class="col-sm-4"><span class="free-shipping-text"><i class="fa fa-check-square"></i> COD Available</span></div>
          <div class="col-sm-4"><span class="free-shipping-text"><i class="fa fa-check-square"></i> 10 Day Repalce</span></div> -->
                    
          </div>
          
          <div class="width_full mrgn_35t">
         <div class="col-sm-12">
         <a class="product-box-cart-btn" href="models/addcart.php?id=<?= $_GET['id']; ?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
         <a class="product-box-cart-btn" href="models/addwishlist.php?id=<?= $_GET['id']; ?>"><i class="fa fa-shopping-cart"></i>Wishlist</a>
         <!-- <a class="product-box-cart-btn" href="models/buynow.php?id="><i class="fa fa-shopping-cart"></i>Buy Now</a> -->
         <!-- <a href="wishlist.php" class="add-wishlist-btn"><h1><i class="fa fa-heart"></i></h1></a><span class="add-wishlist-span"></span> -->
         <!-- <a href="#" class="add-wishlist-btn"><i class="fa fa-compress"></i>Add to Compare</a> -->
         </div>
          </div>
        </div>
      </div>
      
    </div>
    
    <div class="clear"></div>
    
    <div class="width_full tabs-new mrgn_50t">
    <div class="row">
    <div class="col-sm-12">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Specification</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    
    <h3 class="description-heading"><?php echo $pro['productname']; ?></h3>
     <p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you're at the office</p>
<br />

<p>Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you're at the office Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you're at the office Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you're at the office</p>

<ul class="description-ul">
<li>Stop your co-workers in their tracks with the</li>
<li>presentation features on a huge wide-aspect screen while </li>
<li>This flagship monitor features best-in-class</li>
<li>features best-in-class performance and presentation features on a huge wide-aspect screen</li>
</ul>


    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    <div  class="table-responsive">
    <table class="table table-bordered ">
      
        <tr>
          <th scope="row" class="specification-left">Brand</th>
          <td><?php echo $pro['brandname']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="specification-left">Item Lenght</th>
          <td><?php echo $pro['itemlenght']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="specification-left">Material</th>
          <td><?php echo $pro['material']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="specification-left">Stone Shape</th>
          <td><?php echo $pro['stoneshape']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="specification-left">Weight</th>
          <td><?php echo $pro['weight']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="specification-left">Stock</th>
          <td><?php
          if($pro['stock'] == 1)
          {
          ?>
             In Stock
          <?php
          }  
          else
          {
          ?>
            Out Of Stock
          <?php
          }
          ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
    </div>
  </div>

</div>
    </div>
    </div>
    <div class="width_full mrgn_30t">
    <div class="width_full text-center">
    <h2 class="product-section-h2">Releted Product</h2>
  </div>

  <div class="width_full">
    <div id="owl-example" class="owl-carousel">
      
  <?php 
    $result = $conn->query("SELECT * FROM `product` WHERE c_id='".$_GET['c_id']."' AND id !='".$_GET['id']."'");
//print_r("SELECT * FROM `product` WHERE c_id='".$_GET['c_id']."'");
    //      exit;
    while($row = $result->fetch_assoc())
    {      
     ?>
 
      <div class="product-box-padding">
        <div class="product-box-main">
          <div class="product-box-img-part">
            <img src="<?php echo PRODUCT_UPLOAD . $row['image']; ?>" />
            <div class="background-overlay"><a href="product-detail.php?id=<?=$row['id'];?>&c_id=<?=$row['c_id']; ?>" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="#"><?php echo $row['productname']; ?></a></div>
            <h3 class="product-box-price">$<?php echo $row['mrp']; ?><span>$<?php echo $row['saleprice']; ?></span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      <?php }?>
     
      
      <!-- <div class="product-box-padding">
        <div class="product-box-main">
          <div class="product-box-img-part">
            <img src="image/2.jpg" />
            <div class="background-overlay"><a href="#" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="product-box-padding">
        <div class="product-box-main">
          <div class="product-box-img-part">
            <img src="image/3.jpg" />
            <div class="background-overlay"><a href="#" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="product-box-padding">
        <div class="product-box-main">
          <div class="product-box-img-part">
            <img src="image/4.jpg" />
            <div class="background-overlay"><a href="#" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="product-box-padding">
        <div class="product-box-main">
          <div class="product-box-img-part">
            <img src="image/5.jpg" />
            <div class="background-overlay"><a href="product-detail.php?id=<?= $row['id']; ?>" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="models/addcart.php?id=<?= $row['id']; ?>" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>      
    </div>
  </div> -->
  
  
    </div>


  </div>
</section>
<?php
include 'include/footer.php';
?>