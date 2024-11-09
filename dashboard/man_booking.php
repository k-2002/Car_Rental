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
            <h1 class="h3 mb-0 text-gray-800">Manage Booking</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Man_booking</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Booking Tables</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th class="border">Name</th>
                        <th class="border">Email</th>
                        <th class="border">Car Name</th>
                        <th class="border">Price/Daya</th>
                        <th class="border">Car Image</th>
                        <th class="border">Pickup Date</th>
                        <th class="border">Drop-Off Date</th>
                        <th class="border">Pickup Time</th>
                        <th class="border">Drop-Off Time</th>
                        <th class="border">Adharcard</th>
                        <th class="border">Driving Licence</th>
                        <th class="border">Action</th>
                      </tr>
                    </thead>
                    <tfoot class="thead-light">
                      <tr>
                      <th class="border">Name</th>
                        <th class="border">Email</th>
                        <th class="border">Car Name</th>
                        <th class="border">Price/Daya</th>
                        <th class="border">Car Image</th>
                        <th class="border">Pickup Date</th>
                        <th class="border">Drop-Off Date</th>
                        <th class="border">Pickup Time</th>
                        <th class="border">Drop-Off Time</th>
                        <th class="border">Adharcard</th>
                        <th class="border">Driving Licence</th>
                        <th class="border">Action</th>

                      </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM `cars`";
                        $result = mysqli_query($conn,$query);

                        if (mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                ?>                                                                           
                                <tr>
                                    <td class="border"><?php echo $row['c_id']; ?></td>
                                    <td class="border"><?php echo $row['car_name']; ?></td>
                                    <td class="border"><?php echo $row['price_day']; ?></td>
                                    <td class="border"><?php echo $row['fule_type']; ?></td>
                                    <td class="border"><?php echo $row['seating']; ?></td>
                                    <td class="border">
                                        <?php echo "<img src=".$row['image1']." width=100px height=100px/>"; ?>
                                    </td>
                                    <td class="border"><?php echo "<img src=".$row['image2']." width=100px height=100px/>"; ?></td>
                                    <td class="border"><?php echo "<img src=".$row['image3']." width=100px height=100px/>"; ?></td>
                                    <td class="border"><?php echo "<img src=".$row['image4']." width=100px height=100px/>"; ?></td>
                                    <td class="border"><?php echo $row['milage']; ?></td>
                                    <td class="border"><?php echo $row['transmission']; ?></td>
                                    <td class="border"><?php echo $row['laggage']; ?></td>
                                    <td class="border"><?php echo $row['aircondition']; ?></td>
                                    <td class="border"><?php echo $row['audio_input']; ?></td>
                                    <td class="border"><?php echo $row['car_kit']; ?></td>
                                    <td class="border"><?php echo $row['child_seat']; ?></td>
                                    <td class="border"><?php echo $row['bluethooth']; ?></td>
                                    <td class="border"><?php echo $row['music']; ?></td>
                                    <td class="border"><?php echo $row['powerdoorlocks']; ?></td>
                                    <td class="border">
                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green" href="car_update.php?id=<?php echo $row['c_id']; ?>">
                                        <i class="fas fa-edit"></i></a>
                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="car_delete.php?id=<?php echo $row['c_id']; ?>">
                                        <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                      <?php
                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                              <td>No Data Found</td>
                            </tr>
                            <?php
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

