<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../log_reg.php");
   }

   include_once('../controller/productController.php');

   $user_session_id = $_SESSION['user'];
   // fetch user information in the database
   $sql = "SELECT * FROM products WHERE vendor_id = '$user_session_id';";
   $categ_list = $product->read_product($sql);

?>


   


<?php include_once 'layout/sidebar.php' ?>


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <?php include_once 'layout/header.php' ?>
        <!-- Header-->
        
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboards</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li class="disable">List of Products</li>
                            <li class="active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Basic Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Category ID</th>
                                            <th scope="col">Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        while($category_rows = mysqli_fetch_assoc($categ_list)) {
                                            echo "<tr>";
                                            echo "<td>" . $category_rows['id'] . "</td>";
                                            echo "<td>" . $category_rows['title'] . "</td>";
                                            echo "<td>" . $category_rows['stock'] . "</td>";
                                            echo "<td>" . $category_rows['category_id'] . "</td>";
                                            echo '<td><img src="product_upload/' . $category_rows['photo']. '" style="width:200px;">' . '</td>';
                                            echo "</tr>";

                                          }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->







    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
