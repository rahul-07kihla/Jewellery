<?php
// include_once 'include/connect.php';
include_once 'include/header.php';

if (isset($_SESSION['USER_ID'])) {
	header("location:".$_SESSION['REFERER']);
}

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if($result = $conn->query("SELECT * FROM `slider` WHERE status='1'"))
{
if($result->num_rows){
  ?>
<div class="width_full slider-border">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <?php
      for($i = 0; $i < $result->num_rows; $i++){ 
        $class = $i == 0 ? 'active' : '';
        ?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $class; ?>">

            </li>
            <?php
      }
        ?>
        </ol>
        <div class="carousel-inner">
            <?php
          $flag="true";
        while($row = $result->fetch_assoc()){
          $c = "";
          if($flag)
          {
            $flag = false;
            $c = "active";
          }
          ?>
            <!-- <div class="width_full slider-border">
      <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
            <div class="item <?php echo $c; ?>"> <img src="<?php echo SLIDER_UPLOAD. $row['image']; ?> "
                    style="width:100%" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php echo $row['name']; ?></h1>
                        <h2>50% off</h2>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do </p>
                        <a class="shopnow-btn" href="#" role="button">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <?php
          }
          ?>
        </div>
    </div>
</div>
<?php
    }
}
    ?>
<!-- $query = "SELECT * FROM `slider`";

$res =  $conn->query($query);

$row = mysqli_fetch_assoc($res);

while($row)
{
  ?> -->
<!-- <div class="width_full slider-border">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    Indicators -->

<!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active"> <img src="" style="width:100%" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <h2>50% off</h2>
            <p></p>
            <a class="shopnow-btn" href="shop.php" role="button">SHOP NOW</a> </div>
        </div>
      </div>   -->
<!-- <div class="item"> <img src="image/main-slider-2.jpg" style="width:100%" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1></h1>
            <h2>50% off</h2>
            <p></p>
            <a class="shopnow-btn" href="shop.php" role="button">SHOP NOW</a> </div>
        </div>
      </div>
      
    </div>
  </div>
</div> -->

<section class="product-section">
    <div class="container">
        <div class="width_full text-center">
            <h2 class="product-section-h2">WEEKLY FEATURED PRODUCTS</h2>
        </div>
        <div class="width_full">
            <div id="owl-example" class="owl-carousel">

            <?php
              if($result2 = $conn->query("SELECT * FROM product WHERE status='1'"))
                {
              while($row2 = $result2->fetch_assoc())
              {
                if($result2->num_rows)
                {      
              ?>
                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="<?php echo PRODUCT_UPLOAD . $row2['image']; ?>" />
                            <div class="background-overlay"><a href="product-detail.php?id=<?=$row2['id'];?>&c_id=<?=$row2['c_id'];?>" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#"><?php echo $row2['productname']; ?></a></div>
                            <h3 class="product-box-price">$<?php echo $row2['saleprice']; ?><span>$<?php echo $row2['mrp']; ?></span></h3>
                            <a class="product-box-cart-btn" href="models/addcart.php?id=<?= $row2['id']; ?>"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
            }
                ?>
                <!-- <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/2.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>

                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/3.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>

                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/4.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>

                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/5.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</section>
<div class="clear"></div>
<section class="category-section">

    <?php
              if($result1 = $conn->query("SELECT * FROM category WHERE status='1'"))
                {
              while($row1 = $result1->fetch_assoc())
              {
                if($result->num_rows){                
              ?>
    <div class="view view-sixth border-right-solid border-bottom-solid" style="background-image:url(<?php echo CATEGORY_UPLOAD . $row1['categoryimage']; ?>);">
        <div class="mask-diplay">
            <div class="mask-diplay-middle">
                <h3><?php echo $row1['cetegoryname']; ?></h3>
            </div>
        </div>
        <div class="mask">
            <div class="mask-middle">
                <h2><?php echo $row1['cetegoryname']; ?></h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
                <a href="product-category.php?id=<?=$row1['id'];?>" class="info">Read More</a>
            </div>
        </div>
    </div>
    <?php
                }
             }
            }
                ?>

    <!-- <div class="view view-sixth border-bottom-solid" style="background-image:url(image/Bracelets.jpg);">
        <div class="mask-diplay">
            <div class="mask-diplay-middle">
                <h3>Bracelets</h3>
            </div>
        </div>
        <div class="mask">
            <div class="mask-middle">
                <h2>Bracelets</h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
    </div>

    <div class="view view-sixth border-right-solid" style="background-image:url(image/Earrings.jpg);">
        <div class="mask-diplay">
            <div class="mask-diplay-middle">
                <h3>Earrings</h3>
            </div>
        </div>
        <div class="mask">
            <div class="mask-middle">
                <h2>Earrings</h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
    </div>

    <div class="view view-sixth " style="background-image:url(image/Rings.jpg);">
        <div class="mask-diplay">
            <div class="mask-diplay-middle">
                <h3>Rings</h3>
            </div>
        </div>
        <div class="mask">
            <div class="mask-middle">
                <h2>Rings</h2>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio.</p>
                <a href="#" class="info">Read More</a>
            </div>
        </div>
    </div> -->


</section>
<section class="product-section">
    <div class="container">
        <div class="width_full text-center">
            <h2 class="product-section-h2">WEEKLY FEATURED </h2>
        </div>
        <div class="width_full">
            <div id="owl-example2" class="owl-carousel">

            <?php
              if($result2 = $conn->query("SELECT * FROM product WHERE status='1'"))
                {
              while($row2 = $result2->fetch_assoc())
              {
                if($result2->num_rows){                
              ?>
                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="<?php echo PRODUCT_UPLOAD . $row2['image']; ?>" />
                            <div class="background-overlay"><a href="product-detail.php?id=<?= $row2['id'];?>&c_id=<?=$row2['c_id'];?>" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#"><?php echo $row2['productname']; ?></a></div>
                            <h3 class="product-box-price">$<?php echo $row2['saleprice']; ?><span>$<?php echo $row2['mrp']; ?></span></h3>
                            <span class="width_full text-center"><a href="models/addcart.php?id=<?= $row2['id']; ?>" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
            }
                ?>



                <!-- <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/2.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>

                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/3.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>

                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/4.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>

                <div class="product-box-padding">
                    <div class="product-box-main">
                        <div class="product-box-img-part">
                            <img src="image/5.jpg" />
                            <div class="background-overlay"><a href="shop.php" class="quick_view_btn">Quick View</a>
                            </div>
                        </div>
                        <div class="product-box-detail-part">
                            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver
                                    Earri</a></div>
                            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
                            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</section>
<!-- <section class="special-offers-section">
    <h2 class="special-offers-heading">Special offers</h2>
    <div class="width_full mrgn_30t">
        <div class="offers-box-width">
            <div class="offers-grid">
                <div style="background-image: url(image/offer-1.jpg);" class="offer">
                    <div class="title">
                        <h2>Finest Jewelry</h2>
                    </div>
                    <div class="start-shopping"> <a class="btn-medium-2" href="shop.php">Start Shopping</a> </div>
                </div>
            </div>
        </div>
        <div class="offers-box-width">
            <div class="offers-grid">
                <div style="background-image: url(image/offer-2.jpg);" class="offer">
                    <div class="title">
                        <h2>Wedding Rings</h2>
                    </div>
                    <div class="start-shopping"> <a class="btn-medium-2" href="shop.php">Start Shopping</a> </div>
                </div>
            </div>
        </div>
        <div class="offers-box-width">
            <div class="offers-grid">
                <div style="background-image: url(image/offer-3.jpg);" class="offer">
                    <div class="title">
                        <h2>Beautiful Earrings</h2>
                    </div>
                    <div class="start-shopping"> <a class="btn-medium-2" href="shop.php">Start Shopping</a> </div>
                </div>
            </div>
        </div>
        <div class="offers-box-width">
            <div class="offers-grid">
                <div style="background-image: url(image/offer-4.jpg);" class="offer">
                    <div class="title">
                        <h2>Vintage Jewelry</h2>
                    </div>
                    <div class="start-shopping"> <a class="btn-medium-2" href="shop.php">Start Shopping</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="item-stock-section">
    <div class="container">
        <div class="item-stock-line"></div>
        <div class="row">
            <div class="col-sm-3">
                <div class="item-stock-box">
                    <div class="item-stock-box-round"><i class="fa fa-check-square-o"></i></div>
                    <h2>Items in stock</h2>
                    <p>We carry all our items in stock</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-stock-box">
                    <div class="item-stock-box-round"><i class="fa fa-calendar"></i></div>
                    <h2>Same day handling</h2>
                    <p>We package items in the same day</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-stock-box">
                    <div class="item-stock-box-round"><i class="fa fa-truck"></i></div>
                    <h2>Fast shipping</h2>
                    <p>Get your items ASAP</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="item-stock-box">
                    <div class="item-stock-box-round"><i class="fa fa-cc-visa"></i></div>
                    <h2>Payment methods</h2>
                    <p>We accept different payment methods</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php
include 'include/footer.php';
?>