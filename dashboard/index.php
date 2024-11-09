<?php
    session_start();
    
    if (!isset($_SESSION['adminname']))
    {
      echo "<script>window.location.href='adminlogin.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php
      include('sidebar.php');
    ?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php
          include('topbar.php');
        ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="man_brand.php">Brand</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `brand`";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="man_car.php">Vehicle</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `cars`";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        ?>
                      </div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-car fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- New booking Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="new_booking.php">New Booking Requests</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `booking` WHERE `status`='0'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <!-- Confirm booking Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="confirm_booking.php">Confirm Booking</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `booking` WHERE `status`='confirm'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check-square fa-2x text-success" ></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Cancel booking Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="cancel_booking.php">Cancel Booking</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `booking` WHERE `status`='cancel'";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-window-close fa-2x " style='color:red'></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="reg_user.php">Register User</a></div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `register`";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        ?>
                      </div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"><a href="man_contact.php">Contact Requests</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        $sql="select count(*) from `contact`";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_array($result);
                        echo "<h3>$row[0]</h3>";
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
        <?php
          include('footer.php');
        ?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>