<?php 
   
   session_start();
   if(!isset($_SESSION['user'])) {
      header("location: ../log_reg.php");
   }

   include_once('../database.php');

   $user = new Database();

   // fetch user information in the database
   $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user']."'";
   $result = $user->read_customers($sql);

?>


<?php include_once 'layout/sidebar.php'; ?>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <?php include_once 'layout/header.php'; ?>
        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>e-Binhi Seller Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Seller Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>



            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Profile Card</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <img src="../uploads/<?php echo $result['photo']; ?>" class="rounded-circle mx-auto d-block"alt="Card image cap" width="400px">
                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $result['username'];?></h5>
                        </div>
                        <hr>
                        <div class="card-text text-sm-center">
                            <h6 class="text-sm-center mt-2 mb-1">Information</h6>
                            <?php echo $result['full_name']; ?> <br>
                            <?php echo $result['email']; ?> <br>
                            <?php echo $result['phone']; ?> <br>
                            <?php echo $result['address']; ?> <br>
                            <?php echo $result['role']; ?> <br>
                            <?php echo $result['status']; ?> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
