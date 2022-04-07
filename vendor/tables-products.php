<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../log_reg.php");
   }

   include_once('../controller/productController.php');


   // fetch user information in the database
   $sql = "SELECT * FROM products WHERE vendor_id = ".$_SESSION['user'].";";
   $result = $product->read_product($sql);
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
                            <li class="disable">List of Users</li>
                            <li class="active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List of Users</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Summary</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Vendor</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['created_at']; ?></td>
                                        </tr>
                                        <?php }?>
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
