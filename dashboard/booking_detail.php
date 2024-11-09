<?php
    session_start();
    include('connection.php');
    // error_reporting(0);
     
    
    if (!isset($_SESSION['adminname']))
    {
      echo "<script>window.location.href='adminlogin.php';</script>";
    }
    else
    {
      if(isset($_POST['cancel']))
        {
          $eid=$_POST['id'];
          
          $query = "UPDATE booking SET `status`='cancel' WHERE  `bookingno`='$eid'";
          $result = mysqli_query($conn,$query) or die('query error');

        if($result)
        {
            echo "<script>alert('Booking Successfully Cancelled');</script>";
          echo "<script>window.location.href='cancel_booking.php';</script>";
        }
      }


      if(isset($_POST['confirm']))
      {
        
        $aeid = $_POST['id'];
        $query2 = "SELECT * FROM booking WHERE `bookingno` ='$aeid'";
        $result2 =mysqli_query($conn,$query2)or die('query error');
        if($result2)
        {
          while($r = mysqli_fetch_assoc($result2))
          {
            $customer = $r['useremail'];
            $b_date = $r['pickdate'];
          }
        }
        $to = "$customer";
        $subject = "Booking Confirmation";
        $message = "Thank you for booking a car on $b_date.";

        // Send the email
         mail($to, $subject, $message);
        

        $query1 = "UPDATE `booking` SET `status` = 'confirm'  WHERE `booking`.`bookingno` ='$aeid' ";
        $result1 = mysqli_query($conn,$query1) or die('query error');

        if($result1)
        {
          echo "<script>alert('Booking Successfully Confirmed');</script>";
           echo "<script>window.location.href='confirm_booking.php';</script>";
        }
      }
        
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
            <h1 class="h3 mb-0 text-gray-800">Booking Detail</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">booking_detail</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Booking Info.</h6>
    
                </div>
                <div class="table-responsive p-3">
                <?php

                  if (isset($_GET['bid']))
                  {
                      $bid = $_GET['bid'];
                      
                      $query3 = " SELECT * FROM `booking` WHERE `bookingno`='$bid'";
                      $result3 = mysqli_query($conn,$query3);

                      if (mysqli_num_rows($result3)>0)
                      {
                          
                              while($row=mysqli_fetch_array($result3))
                              {

                                $email=$_SESSION['email'];
                                $sql="SELECT * FROM `register` WHERE `email`='$email'";
                                $res = mysqli_query($conn,$sql) or die('query errror');

                                if (mysqli_num_rows($res)>0)
                                {
                                    
                                        while($row_c=mysqli_fetch_array($res))
                                        {
                                          $c_name = $row_c['name'];
                                          $c_email = $row_c['email'];
                                          $c_phone = $row_c['mo'];
                                        } 
                                }
                                  ?>
               <div id="print">
               <table border="1"  class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%"  >
                    <thead class="thead-light">
                    <tr>
											<th colspan="4" style="text-align:center;color:blue">User Details</th>
										</tr>
										<tr>
											<th>Booking No.</th>
											<td>#<?php echo $bid;?></td>
											<th>Name</th>
											<td><?php echo $c_name;?></td>
										</tr>
										<tr>											
											<th>Email Id</th>
											<td><?php echo $c_email;?></td>
											<th>Contact No</th>
											<td><?php echo htmlentities($c_phone);?></td>
										</tr>
										<tr>
											<th colspan="4" style="text-align:center;color:blue">Booking Details</th>
										</tr>
											<tr>											
											<th>Vehicle Name</th>
											<td><?php echo htmlentities($row['vtitle']); ?></td>
											<th>Booking Date</th>
											<td><?php echo htmlentities($row['postingdate']);?></td>
										</tr>
										<tr>
											<th>Pickup Date</th>
											<td><?php echo htmlentities($row['pickdate']);?></td>
											<th>Drop-Off Date</th>
											<td><?php echo htmlentities($row['dropdate']);?></td>
										</tr>
                    <tr>
											<th>Pickup Time</th>
											<td><?php echo htmlentities($row['picktime']);?></td>
											<th>Drop-Off Time</th>
											<td><?php echo htmlentities($row['droptime']);?></td>
										</tr>
                    <tr>
                    <?php
                    $status = $row['status'];
                    if($status=='confirm' AND $status='cancel')
                    {
                    ?>
											<!-- <th>Adharcard</th>
											<td><?php echo "<img src=../".$row['adharcard']." width=100px height=100px/>";?></td>
											<th>Licence</th>
											<td><?php echo "<img src=../".$row['driving_licence']." width=100px height=100px/>";?></td> -->
                      <?php
                      }
                      else
                      {
                        ?>
                        <th>Adharcard</th>
											<td><?php echo "<img src=../".$row['adharcard']." width=100px height=100px/>";?></td>
											<th>Licence</th>
											<td><?php echo "<img src=../".$row['driving_licence']." width=100px height=100px/>";?></td>
                        <?php
                      }
                      ?>
										</tr>
<tr>
	<th>Total Days</th>
	<td><?php
    $d1=$row['pickdate'];
    $d2=$row['dropdate'];

    $date1=date_create($d1);
    $date2=date_create($d2);
   
    $diff=date_diff($date1,$date2);
    $day = $diff->days; 
    if($date1==$date2)
    {
      $day ='1';
      echo htmlentities($day);   
    }
    else
    {
      echo htmlentities($day);
    }
   ?></td>
	<th>Rent Per Days</th>
	<td><?php echo htmlentities($row['vprice']);?></td>
</tr>
<tr>
	<th colspan="3" style="text-align:center">Grand Total</th>
	<td><?php 
  $price = $row['vprice'];
  $total= ($price * $day);    
  
  echo htmlentities($total);
  ?></td>
</tr>
<tr>
<th>Booking Status</th>
<td><?php 
$status = $row['status'];
if($status=='cancel')
{
echo htmlentities('Cancelled');
} else if ($status=='confirm') {
echo htmlentities('Confirmed');
}
 else{
 	echo htmlentities('Not Yet Confirm');
 }
										?></td>
										<th>Last pdation Date</th>
										<td><?php echo htmlentities($row['LastUpdationDate']);?></td>
									</tr>

									
										<tr>	
										<td style="text-align:center" colspan="4">
			<form method='post'>
      <input type="hidden" name="id" value="<?php echo $_GET['bid']; ?>" > 
      <?php 
        if($status=='confirm' AND $status='cancel')
        {
          ?>
         
      <input type="hidden" name="confirm" value="Confirm Booking" class="btn btn-primary">
      <input type="hidden" name="cancel" value="Cancel Booking" class="btn btn-danger">	
      <?php
        }
        else
        {
          ?>

          <input type="submit" name="confirm" value="Confirm Booking" class="btn btn-primary">
          <input type="submit" name="cancel" value="Cancel Booking" class="btn btn-danger">
          <?php
        }
        ?>
      </form> 
</td>
</tr>

									
										
									</tbody>
								</table>
								<form method="post">
	   <input name="Submit2" type="submit" class="txtbox4" value="Print" onClick="return f3();" style="cursor: pointer;"  />
	</form>
              </div>
                  <?php
                                }
                            
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
  <script language="javascript" type="text/javascript">
function f3()
{
window.print(); 
}
</script>

</body>
</html>





