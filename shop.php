<?php
include_once 'include/header.php';
?>
<section class="product-section">
  <div class="container">
  <div class="width_full text-center">
    <h2 class="product-section-h2">WEEKLY FEATURED PRODUCTS</h2>
  </div>
  <div class="width_full">
    <div id="owl-example" class="owl-carousel">
            <?php 
            $gender = $_GET['value'];
            if($gender){
            if($result2 = $conn->query("SELECT * FROM product WHERE status='1' AND gender_type='".$_GET['value']."'"))
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
                          <span class="width_full text-center"><a href="models/addcart.php?id=<?= $_GET['id']; ?>" class="product-box-cart-btn"><i
                                      class="fa fa-shopping-cart"></i>Add to cart</a></span>
                      </div>
                  </div>
              </div>
                <?php
                    }
                }
              }
            }
              else if($result2 = $conn->query("SELECT * FROM product"))
              {
                while($row2 = $result2->fetch_assoc())
                {
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
                            <span class="width_full text-center"><a href="models/addcart.php?id=<?= $row2['id']; ?>" class="product-box-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>Add to cart</a></span>
                        </div>
                    </div>
                </div>      
              <?php
                }
              }
              ?>
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
            <div class="background-overlay"><a href="#" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="#">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>      
    </div> -->
  </div>
</section>
<div class="clear"></div>
<section class="category-section">
<?php
include 'include/footer.php';
?>