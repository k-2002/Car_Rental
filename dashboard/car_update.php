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
            <h1 class="h3 mb-0 text-gray-800">Update Car Detail</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Car</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Update Car</h6>
            </div>
                <div class="card-body">
                <?php
                    if (isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        
                        $query = " SELECT * FROM `cars` WHERE `c_id`='$id' ";
                        $result = mysqli_query($conn,$query);

                        if (mysqli_num_rows($result)>0)
                        {
                            
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    ?>
                              
                            <form action="car_code.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" id="exampleInput" value="<?php echo $row['c_id']; ?>" name="c_id">
                            <div class="form-group">
                                <label for="exampleInputname">Car Name</label>
                                <input type="text" class="form-control" id="exampleInput" value="<?php echo $row['car_name']; ?>" name="name">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputname">Brand Name</label>
                              <input type="text" class="form-control" id="exampleInput" value="<?php echo $row['Brand'] ?>" name="brand" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputprice">Price</label>
                                <input type="number" class="form-control" id="exampleInput" value="<?php echo $row['price_day']; ?>" name="price">
                            </div>
                            <select class="form-control mb-3" name="fuel">
                                <option value="Petrol"
                                <?php
                                    if ($row['fuel_type']=="Petrol")
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >Petrol</option>
                                <option value="Desal"
                                <?php
                                    if ($row['fuel_type']=="Desal")
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >Desal</option>
                                <option value="CNG"
                                <?php
                                    if ($row['fuel_type']=='CNG')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >CNG</option>
                            </select>
                            <select class="form-control mb-3" name="seats">
                                <option value="">Select seats</option>
                                <option value="4"
                                <?php
                                    if ($row['seats']=='4')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >4</option>
                                <option value="5"
                                <?php
                                    if ($row['seats']=='5')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >5</option>
                                <option value="6"
                                <?php
                                    if ($row['seats']=='6')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >6</option>
                                <option value="8"
                                <?php
                                    if ($row['seats']=='8')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >8</option>
                            </select>
                            <div class="form-group">
                                <label for="exampleInputprice">Milage</label>
                                <input type="number" class="form-control" id="exampleInput" value="<?php echo $row['milage']; ?>" name="milage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputprice">Transmission</label>
                                <input type="text" class="form-control" id="exampleInput" value="<?php echo $row['transmission']; ?>" name="trans">
                                </div>
                            <select class="form-control mb-3" name="laggage">
                                <option>Select luggage</option>
                                <option value="2"
                                  <?php
                                    if ($row['luggage']=='2')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >2</option>
                                <option value="4"
                                <?php
                                    if ($row['luggage']=='4')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >4</option>
                                <option value="6"
                                <?php
                                    if ($row['luggage']=='6')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >6</option>
                                <option value="8"
                                <?php
                                    if ($row['luggage']=='8')
                                    {
                                      echo "selected"; 
                                    }
                                  ?>
                                >8</option>
                            </select>
                            <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image1" value="<?php echo $row['image1']; ?>">
                                <label class="custom-file-label" for="customFile">Image1</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image2" value="<?php echo $row['image2']; ?>">
                                <label class="custom-file-label" for="customFile">Image2</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image3" value="<?php echo $row['image3']; ?>">
                                <label class="custom-file-label" for="customFile">Image3</label>
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="image4" value="<?php echo $row['image4']; ?>">
                                <label class="custom-file-label" for="customFile">Image4</label>
                            </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="air" value="1"
                                <?php
                                    if ($row['aircondition']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck1">Aircondition</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" name="audio" value="1"
                                  <?php
                                    if ($row['audio_input']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck2">Audio Input</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3" name="kit" value="1"
                                <?php
                                    if ($row['car_kit']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck3">Car Kit</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4" name="chiled" value="1"
                                <?php
                                    if ($row['child_seat']=='1')
                                    {
                                      echo "checked"; 
                                    }     
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck4">Child seats</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5" name="bluethooth" value="1"
                                <?php
                                    if ($row['bluethooth']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                ?>
                                >
                                <label class="custom-control-label" for="customCheck5">Bluethooth</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6" name="music" value="1"
                                <?php
                                    if ($row['music']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck6">Music</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7" name="pow" value="1"
                                <?php
                                    if ($row['powerdoorlocks']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck7">Power Doorlocks</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8" name="seat_belt" value="1"
                                <?php
                                    if ($row['seat_belt']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck8">Seat Belt</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9" name="onboard_computer" value="1"
                                <?php
                                    if ($row['seat_belt']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck9">Onboard Computer</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-9">
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10" name="remote_lock" value="1"
                                <?php
                                    if ($row['remote_lock']=='1')
                                    {
                                      echo "checked"; 
                                    }
                                  ?>
                                >
                                <label class="custom-control-label" for="customCheck10">Remote central locking</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputname">Description</label>
                                <input type="text" class="form-control" id="exampleInput" value="<?php echo $row['description']; ?>" name="description">
                            </div>
                            <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                        </form>
                                <?php
                                }
                            
                        }
                        else
                        {
                           ?>
                            <h4>No Data Found</h4>
                           <?php
                        }
                    }
                    
                ?>
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

