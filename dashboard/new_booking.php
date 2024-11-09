<?php
    session_start();
    // error_reporting(0);
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
  <title>Admin - DataTables</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
            <h1 class="h3 mb-0 text-gray-800">New Booking</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">new_booking</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">New Booking</h6>
                </div>
                <div class="table-responsive p-3">
                
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th class="border">ID</th>
                        <th class="border">Name</th>
                        <th class="border">Booking No</th>
                        <th class="border">Vehical</th>
                        <th class="border">Pickup Date</th>
                        <th class="border">Drop-Off Date</th>
                        <th class="border">Pickup Time</th>
                        <th class="border">Drop-Off Time</th>
                        <th class="border">Status</th>
                        <th class="border">Posting Date</th>
                        <th class="border">Action</th>
                      </tr>
                    </thead>
                    <tfoot class="thead-light">
                      <tr>
                        <th class="border">ID</th>
                        <th class="border">Name</th>
                        <th class="border">Booking No</th>
                        <th class="border">Vehical</th>
                        <th class="border">Pickup Date</th>
                        <th class="border">Drop-Off Date</th>
                        <th class="border">Pickup Time</th>
                        <th class="border">Drop-Off Time</th>
                        <th class="border">Status</th>
                        <th class="border">Posting Date</th>
                        <th class="border">Action</th>

                      </tr>
                    </tfoot>
                    <tbody>
                        <?php

                          $query = "SELECT * FROM `booking` WHERE `status`='0'";
                          $result = mysqli_query($conn,$query) or die('query error');

                          if($result)
                          {
                            while($row = mysqli_fetch_assoc($result))
                            {
                              ?>
                            
                                <tr>
                                    <td class="border"><?php echo $row['id']; ?></td>
                                    <td class="border"><?php echo $row['useremail']; ?></td>
                                    <td class="border"><?php echo $row['bookingno']; ?></td>
                                    <td class="border"><?php echo $row['vtitle']; ?></td>
                                    <td class="border"><?php echo $row['pickdate']; ?></td>
                                    <td class="border"><?php echo $row['dropdate']; ?></td>
                                    <td class="border"><?php echo $row['picktime']; ?></td>
                                    <td class="border"><?php echo $row['droptime']; ?></td>
                                    <td class="border"> 
                                    <?php 
                                    if ($row['status']=='confirm')
                                    {
                                      ?>
                                        <button type="button" class="btn btn-success" style="float:right">Confirm</button>
                                      <?php
                                    }
                                    if($row['status']=='cancel')
                                    {
                                      ?>
                                        <button type="button" class="btn btn-danger" style="float:right">Cancelled</button>
                                      <?php
                                    }
                                    if($row['status']=='0')
                                    {
                                      ?>
                                        <button type="button" class="btn btn-info" style="float:right">Not Yet Confirm</button>
                                      <?php
                                    }  
                                    ?>
                                    </td>
                                    <td class="border"><?php echo $row['postingdate']; ?></td>
                                    <td class="border">
                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green" href="booking_detail.php?bid=<?php echo $row['bookingno'];?>">
                                        View</a>
                                    </td>
                                </tr>
                                <?php
                            }
                          }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
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
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>

