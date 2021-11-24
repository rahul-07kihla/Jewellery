<?php
include_once 'include/header.php';
?>
      </div>
          <!--/.container-fluid --> 
        </nav>
  </div>
    </header>
<section class="inner-page-main" style="padding-top:0;">
      
      <div class="container">
    <div class="width_full mrgn_20t">
          <div class="row">
        <div class="col-md-3 border-right">
              <div class="category-left-menu">
            <h3 class="categories-heading">Categories</h3>
            <div id="acdnmenu">
                  <ul>
                <li>Clothings
                      <ul>
                    <li>Men
                          <ul>
                        <li><a href="#">Sub Link 1</a></li>
                        <li><a href="#">Sub Link 2</a></li>
                        <li>Sub Level 2
                              <ul>
                            <li><a href="#">Sub Link 1</a></li>
                            <li><a href="#">Sub Link 2</a></li>
                            <li><a href="#">Sub Link 3</a></li>
                            <li><a href="#">Sub Link 4</a></li>
                          </ul>
                            </li>
                      </ul>
                        </li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Kids</a></li>
                  </ul>
                    </li>
                <li>Necklaces
                      <ul>
                    <li><a href="#">Link 1</a> </li>
                    <li>Sub Level 1
                          <ul>
                        <li><a href="#">Sub Link 1</a></li>
                        <li><a href="#">Sub Link 2</a></li>
                        <li>Sub Level 2
                              <ul>
                            <li><a href="#">Sub Link 1</a></li>
                            <li><a href="#">Sub Link 2</a></li>
                            <li><a href="#">Sub Link 3</a></li>
                            <li><a href="#">Sub Link 4</a></li>
                          </ul>
                            </li>
                      </ul>
                        </li>
                  </ul>
                    </li>
                <li><a href="#">Rings</a></li>
                <li><a href="#">Earrings</a></li>
              </ul>
                </div>
          </div>
              <div class="category-left-menu mrgn_20t">
            <h3 class="categories-heading">Price</h3>
            <ul class="price-menu">
            <li><a href="#"> $110.00 - $119.99</a></li>
            <li><a href="#"> $110.00 - $119.99</a></li>
            <li><a href="#"> $110.00 - $119.99</a></li>
            <li><a href="#"> $110.00 - $119.99</a></li>
            <li><a href="#"> $110.00 - $119.99</a></li>
            <li><a href="#"> $110.00 - $119.99</a></li>
            </ul>
          </div>

          <div class="category-left-menu mrgn_20t">
            <h3 class="categories-heading">Brand</h3>
            <ul class="price-menu">
          <?php 
          $query1 = "SELECT * FROM brand";

          $res1 = mysqli_query($conn , $query1);

          while($row1 = mysqli_fetch_assoc($res1))
          {
          ?>
          
            <li><a href="product-category.php?id=<?=$row1['id'];?>"><?php echo $row1['brandname']; ?></a></li>
            <!-- <li><a href="#">Levis</a></li>
            <li><a href="#">Samsung</a></li>
            <li><a href="#">Philips</a></li>
            <li><a href="#">Adidas</a></li>
            <li><a href="#">Reebok</a></li> -->
            <?php
            }
            ?>
            </ul>
          </div>
          
            </div>
            
            <div class="col-md-9">
            <div class="row">
            <div class="col-sm-12"><div class="category-page-slider"><img src="assets/image/category-slider.jpg" /></div></div>
            <?php
              if($result2 = $conn->query("SELECT * FROM product WHERE status='1' AND c_id='".$_GET['id']."'"))
              {
            while($row2 = $result2->fetch_assoc())
            {
              if($result2->num_rows)
              {
            ?>
            <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
          <img src="<?php echo PRODUCT_UPLOAD . $row2['image']; ?>" />
            <div class="background-overlay"><a href="product-detail.php?id=<?=$row2['id'];?>&c_id=<?=$row2['c_id'];?>" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html"><?php echo $row2['productname']; ?></a></div>
            <h3 class="product-box-price">$<?php echo $row2['mrp']; ?><span>$<?php echo $row2['saleprice']; ?></span></h3>
            <span class="width_full text-center"><a href="models/addcart.php?id=<?= $row2['id']; ?>" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      <?php
              }
            }
          }
          ?>
      
      <!-- <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/2.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/3.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/4.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/5.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/7.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/8.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/9.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="product-box-main mrgn_30b">
          <div class="product-box-img-part">
            <img src="image/10.jpg" />
            <div class="background-overlay"><a href="product-detail.html" class="quick_view_btn">Quick View</a></div>
          </div>
          <div class="product-box-detail-part">
            <div class="width_full text-center"><a class="product-box-title" href="product-detail.html">Beautiful Silver Earri</a></div>
            <h3 class="product-box-price">$39.00<span>$45.00</span></h3>
            <span class="width_full text-center"><a href="#" class="product-box-cart-btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></span> </div>
        </div>
      </div>
      </div> -->
      
      
      <div class="width_full pagination-new">
      <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">PRE</span>
      </a>
    </li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">NEXT</span>
      </a>
    </li>
  </ul>
</nav>
      </div>
      
            </div>
            
      </div>
        </div>
  </div>
    </section>
<?php
include 'include/footer.php';
?>