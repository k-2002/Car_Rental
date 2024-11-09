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
            <h1 class="h3 mb-0 text-gray-800">Register User Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register User Tables</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Register User Tables</h6>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"
                    id="#modalLong">Add user</button>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th class="border">ID</th>
                        <th class="border">Name</th>
                        <th class="border">Mobile_No.</th>
                        <th class="border">Email</th>
                        <th class="border">Password</th>
                        <th class="border">Action</th>
                      </tr>
                    </thead>
                    <tfoot class="thead-light">
                      <tr>
                        <th class="border">ID</th>
                        <th class="border">Name</th>
                        <th class="border">Mobile_No.</th>
                        <th class="border">Email</th>
                        <th class="border">Password</th>
                        <th class="border">Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM `register`";
                        $result = mysqli_query($conn,$query);

                          if (mysqli_num_rows($result)>0) {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                ?>                                                                           
                      <tr>
                        <td class="border"><?php echo $row['id']; ?></td>
                        <td class="border"><?php echo $row['name']; ?></td>
                        <td class="border"><?php echo $row['mo']; ?></td>
                        <td class="border"><?php echo $row['email']; ?></td>
                        <td class="border"><?php echo $row['password']; ?></td>
                        <td class="border">
                          <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green" href="reg_update.php?id=<?php echo $row['id'];?>">
                            <i class="fas fa-edit"></i></a>
                          <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="reg_delete.php?id=<?php echo $row['id'];?>">
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

          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Registration</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Registration Form</h6>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="NameHelp"
                        placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="Mobile No">Mobile No</label>
                      <input type="number" class="form-control" id="Mobile No" name="mno" aria-describedby="Mobile NoHelp"
                        placeholder="Enter Mobile No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Confirmed Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="Confirmed Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              </div>
            </div>
          </div>
          </div>

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
       		
      $name = mysqli_real_escape_string($conn,$_POST['name']);
      $mno = mysqli_real_escape_string($conn,$_POST['mno']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $pass = mysqli_real_escape_string($conn,$_POST['pass']);
      $c_pass = mysqli_real_escape_string($conn,$_POST['cpass']);

      if ($pass != $c_pass) {
        
        echo "<script>alert('conform password did not match: please try again...')</script>";
      }
      else
      {
        $query = "INSERT INTO `register` (`name`, `mo`, `email`, `password`, `c_password`) 
              VALUES ( '$name', '$mno', '$email', '$pass', '$c_pass')";

        $result = mysqli_query($conn,$query);

        if($result)
        {
          echo "<script>alert('register successfully');</script>";  
          echo "<script>window.location.href=reg_user.php;</script>";   
        }
        else
        {
          echo "<script>alert('something went wrong');</script>";  
          echo "<script>window.location.href=reg_user.php;</script>";   
        }
      } 
  	}
  
  

?>
