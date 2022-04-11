<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../log_reg.php");
   }

   include_once('../controller/shoppingOrderController.php');

   // fetch user information in the database
   $sql = "SELECT * FROM shopping_order";
   $result = $order->read_order($sql);
   
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
                        <h1>Reports</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Basic table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">



                <div class="row">

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Order Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Customer ID</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>
                                            <td><img src="../uploads/<?php echo $row['photo']; ?>" alt="" width="50px"> </td>
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


                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Deliveries Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Delivery ID</th>
                                            <th scope="col">Customer ID</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>
                                            <td><img src="../uploads/<?php echo $row['photo']; ?>" alt="" width="50px"> </td>
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


        

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Transaction Table</strong>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Customer ID</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Payment ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['id']; ?></th>
                                            <td><img src="../uploads/<?php echo $row['photo']; ?>" alt="" width="50px"> </td>
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
