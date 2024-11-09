<?php
    session_start();
    error_reporting(0);
    
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
            <h1 class="h3 mb-0 text-gray-800">Add Car</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Car</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Car</h6>
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputname">Car Name</label>
                      <input type="text" class="form-control" id="exampleInput" placeholder="Enter Car Name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputname">Brand Name</label>
                      <input type="text" class="form-control" id="exampleInput" placeholder="Enter Brand Name" name="brand" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputprice">Price</label>
                      <input type="number" class="form-control" id="exampleInput" placeholder="Enter Price/Day" name="price" required>
                    </div>
                    <select class="form-control mb-3" name="fuel" >
                        <option>Select Fule</option>
                        <option>Petrol</option>
                        <option>Desal</option>
                        <option>CNG</option>
                    </select>
                    <select class="form-control mb-3" name="seats">
                        <option>Select seats</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>8</option>
                    </select>
                    <div class="form-group">
                      <label for="exampleInputprice">Milage</label>
                      <input type="number" class="form-control" id="exampleInput" placeholder="Enter Milage" name="milage" required>
                    </div>
                    <select class="form-control mb-3" name="transmission">
                        <option>Select Transmission</option>
                        <option >Manual transmission</option>
                        <option >Automatic transmission</option>
                        <option >Continuously Variable transmission</option>
                        <option >Semi-Automatic transmission</option>
                        <option >Dual Clutch transmission</option>
                    </select>
                    <select class="form-control mb-3" name="luggage">
                        <option>Select laggage</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="8">8</option>
                    </select>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image1" required>
                        <label class="custom-file-label" for="customFile">Image1</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image2" required>
                        <label class="custom-file-label" for="customFile">Image2</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image3" required>
                        <label class="custom-file-label" for="customFile">Image3</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image4">
                        <label class="custom-file-label" for="customFile">Image4</label>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1" name="air" value="1">
                          <label class="custom-control-label" for="customCheck1">Aircondition</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck2" name="audio" value="1">
                          <label class="custom-control-label" for="customCheck2">Audio Input</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck3" name="kit" value="1">
                          <label class="custom-control-label" for="customCheck3">Car Kit</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck4" name="child" value="1">
                          <label class="custom-control-label" for="customCheck4">Chiled seats</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck5" name="bluethooth" value="1">
                          <label class="custom-control-label" for="customCheck5">Bluethooth</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck6" name="music" value="1">
                          <label class="custom-control-label" for="customCheck6">Music</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck7" name="pow" value="1">
                          <label class="custom-control-label" for="customCheck7">Power Doorlocks</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck8" name="seat_belt" value="1">
                          <label class="custom-control-label" for="customCheck7">Seat Belt</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck9" name="onboard_computer" value="1">
                          <label class="custom-control-label" for="customCheck7">Onboard Computer</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck10" name="remote_lock" value="1">
                          <label class="custom-control-label" for="customCheck7">Remote central locking</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputname">Description</label>
                      <input type="text" class="form-control" id="exampleInput" placeholder="Enter Car Description" name="description" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
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

<?php

    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $fule = $_POST['fuel'];
        $seats = $_POST['seats'];
        $milage = $_POST['milage'];
        $trans = $_POST['transmission'];
        $laggage = $_POST['luggage'];

        $img1 = $_FILES['image1']['name'];
			  $img_tmp1 = $_FILES['image1']['tmp_name'];
        $path1 ="dist/images/".$img1;
        move_uploaded_file($img_tmp1,$path1);

        $img2 = $_FILES['image2']['name'];
			  $img_tmp2 = $_FILES['image2']['tmp_name'];
        $path2 ="dist/images/".$img2;
        move_uploaded_file($img_tmp2,$path2);

        $img3 = $_FILES['image3']['name'];
			  $img_tmp3 = $_FILES['image3']['tmp_name'];
        $path3 ="dist/images/".$img3;
        move_uploaded_file($img_tmp3,$path3);

        $img4 = $_FILES['image4']['name'];
			  $img_tmp4 = $_FILES['image4']['tmp_name'];
        $path4 ="dist/images/".$img4;
        move_uploaded_file($img_tmp4,$path4);
        
        $air = $_POST['air'];
        $a_input = $_POST['audio'];
        $kit = $_POST['kit'];
        $cseat = $_POST['child'];
        $blu = $_POST['bluethooth'];
        $music = $_POST['music'];
        $pow = $_POST['pow'];
        $s_belt= $_POST['seat_belt'];
        $o_c =$_POST['onboard_computer'];
        $remote =$_POST['remote_lock'];
        $desc = $_POST['description'];

        $query = "INSERT INTO `cars` (`car_name`,`Brand`, `price_day`, `fuel_type`, `seats`, `image1`, `image2`, `image3`, `image4`, `milage`, `transmission`, `luggage`, `aircondition`, `audio_input`, `car_kit`, `child_seat`, `bluethooth`, `music`, `powerdoorlocks`,`seat_belt`,`onboard_computer`,`remote_lock`,`description`) 
                  VALUES ('$name','$brand', '$price', '$fule', '$seats', '$path1', '$path2', '$path3', '$path4', '$milage','$trans', '$laggage', '$air', '$a_input', '$kit', '$cseat', '$blu', '$music', '$pow','$s_belt','$o_c','$remote','$desc')";
        
        $result = mysqli_query($conn,$query);

        if($result)
        {
          echo "<script>alert('Add car sucessfully...');</script>";
          echo "<script>window.location.href='man_car.php';</script>";
        }
        else
        {
          echo "<script>alert('something went wrong');</script>";
          echo "<script>window.location.href='post_car.php';</script>";
        }
    }
?>


