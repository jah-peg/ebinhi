<!-- Suppliers/Exporter -->
<div class="container-fluid mx-y">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <p class = shops >Suppliers</p>
            <div class="carousel-item active">
              <div class="row py-5 mx-5 text-center">
                <div class="col ml-5">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
  
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
       
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
              
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                   
                      </div>
                    </div>
                </div>
                <div class="col mr-5">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                  
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row py-5 mx-5 text-center">
                <div class="col ml-5">
                    <div class="card">
                      <img src="images/shop/shop2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
          
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
   
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
          
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
               
                      </div>
                    </div>
                </div>
                <div class="col mr-5">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                     
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row py-5 mx-5 text-center">
                <div class="col ml-5">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                   
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                     
                      </div>
                    </div>
                </div>
                <div class="col mx-2">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                 
                      </div>
                    </div>
                </div>
                <div class="col mr-5">
                    <div class="card">
                      <img src="images/shop/shop1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                     
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

  <!-- End of Suppliers/Exporter -->

         <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-left prev" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
        </svg></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right next" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
        </svg></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
    </div>
<!-- End of Suppliers -->

<!-- Categories -->


<?php 
include_once('controller/categoryController.php');
$show_category_sql = "SELECT * FROM categories;";
$list_of_category = $categ->read_category($show_category_sql);
// while($rows = mysqli_fetch_assoc($list_of_category)) {
//   echo $rows['category'];
// }
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <?php 
                    while($category_rows = mysqli_fetch_assoc($list_of_category)) {
                      echo "<li class='list-group-item'>" . $category_rows['category'] . "</li>";
                    }
                    ?>
                </ul>
            </div>
<!--End of Categories -->


<!--Products -->
          <div class="card bg-light mb-3">
              <div class="card-header bg-warning text-white text-uppercase">Last product</div>
              <div class="card-body">
                  <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                  <h5 class="card-title">PRODUCT TITLE</h5>
                  <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="card-text mb-0">99.00 $</p>
              </div>
          </div>
        </div>

        <?php
        include_once('controller/productController.php');
        $sql = "SELECT * FROM products";
        $result = $product->list_product($sql); 
        
        if(!empty($result)) {
          foreach($result as $key=>$value) {
        ?>

        <form action="cart.php" method="POST">
          <div class="card" style="width: 18rem;">
            <div class="product-img">
              <img src="<?php echo "vendor/product_upload/" . $result[$key]['photo'];?>" alt="Product Photo" width="350px" height="230px" style="object-fit: cover;">
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0"><?php echo $result[$key]['title']; ?></h5>
              <p class="card-desc"><?php echo $result[$key]['summary']; ?></p>
              <p class="card-text mb-0">₱ <?php echo $result[$key]['price'] ?></p>
              <a href="#" class="btn btn-cart">ADD TO CART</a>
            </div>
          </div>
        </form>
        <?php 
          }
        }
        
        ?>

        <p class = shops >Suppliers</p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="product-img" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title mb-0">PRODUCT TITLE</h5>
                        <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text mb-0"> 499.00</p>
                    <a href="#" class="btn btn-cart">ADD TO CART</a>
                  </div>
                </div>
            </div>
                           
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="product-img" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title mb-0">PRODUCT TITLE</h5>
                        <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text mb-0"> 499.00</p>
                    <a href="#" class="btn btn-cart">ADD TO CART</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="product-img" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title mb-0">PRODUCT TITLE</h5>
                        <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text mb-0"> 499.00</p>
                    <a href="#" class="btn btn-cart">ADD TO CART</a>
                  </div>
                </div>
            </div>

            <div class="col">
        <p class = shops >Suppliers</p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="product-img" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title mb-0">PRODUCT TITLE</h5>
                        <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text mb-0"> 499.00</p>
                    <a href="#" class="btn btn-cart">ADD TO CART</a>
                  </div>
                </div>
            </div>
                           
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="product-img" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title mb-0">PRODUCT TITLE</h5>
                        <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text mb-0"> 499.00</p>
                    <a href="#" class="btn btn-cart">ADD TO CART</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="product-img" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title mb-0">PRODUCT TITLE</h5>
                        <p class="card-desc">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text mb-0"> 499.00</p>
                    <a href="#" class="btn btn-cart">ADD TO CART</a>
                  </div>
                </div>
            </div>

<!--End ofProducts -->
              
               
               
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
          </div>
      </div>
   </div>  
</div>
