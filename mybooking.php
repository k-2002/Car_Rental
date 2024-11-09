<?php
      include('header.php');
    error_reporting(0);
    if(!isset($_SESSION['logedin']))
		{
			echo "<script>window.location.href='login.php'</script>";
		}
    
?>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_second.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>My Booking <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">My Booking</h1>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<h3><a href="profile.php">Profile</a></h3>
		          </div>
		          <div class="col-md-12">
                    <h3><a href="#" data-toggle="modal" data-target="#myModal">Update Pssword</a></h3>
		          </div>
		          <div class="col-md-12">
                    <h3><a href="logout.php">Log Out</a></h3>
		          </div>
		        </div>
               
          </div>
          <div class="vl" style="border-left: 2px solid black; height: 500px;"> 
          <div class="col-md-12 block-9 mb-md-5">
            <h1>MY BOOKINGS</h1>
           
                   <!-- Row --> 
                 
                   
          <div class='row' id='book'
            <?php 
              if($_GET['id'])
              { 
                echo "style='display:none';";
              }
            ?>
            >
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">My_Booking Tables</h6>
                </div>
                <div class="table-responsive p-3 "  style="height: 400px; overflow: scroll;">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        
                        <th class="border">Booking_No</th>
                        <th class="border">Car_Name</th>
                        <th class="border">Price/Day</th>
                        <th class="border">Pick-Up Date</th>
                        <th class="border">Drop-Off Date</th>
                        <th class="border">Pick-Up Time</th>
                        <th class="border">Drop-Off Time</th>
                        <th class="border">Status</th>
                        <th class="border">Action</th>
                      </tr>
                    </thead>
                    <tfoot class="thead-light">
                      <tr>
                      <th class="border">Booking_No</th>
                        <th class="border">Car_Name</th>
                        <th class="border">Price/Day</th>
                        <th class="border">Pick-Up Date</th>
                        <th class="border">Drop-Off Date</th>
                        <th class="border">Pick-Up Time</th>
                        <th class="border">Drop-Off Time</th>
                        <th class="border">Status</th>
                        <th class="border">Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    
                    <?php
              if (!$_GET['id'])
              {
                $useremail = $_SESSION['email'];

                $query = "SELECT * FROM `booking` WHERE `useremail`='$useremail'";
                $result = mysqli_query($conn,$query) or die('query error');

                if ($result)
                {
                  while ($row = mysqli_fetch_assoc($result))
                  {
                    ?>                                                                
                      <tr>
                        <td class="border"><?php echo $row['bookingno']; ?></td>
                        <td class="border"><?php echo $row['vtitle']; ?></td>
                        <td class="border"><?php echo $row['vprice']; ?></td>
                        <td class="border"><?php echo $row['pickdate']; ?></td>
                        <td class="border"><?php echo $row['dropdate']; ?></td>
                        <td class="border"><?php echo $row['picktime']; ?></td>
                        <td class="border"><?php echo $row['droptime']; ?></td>
                        <td class="border"><form method='post'>
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
                        <td class="border">
                          <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-green" href="mybooking.php?id=<?php echo $row['vehicleid'];?>">
                            <i class="fas fa-edit"></i>view</a>
                        </td>
                      </tr>
                      <?php
                    }
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
          
                 
            <div class="col-md-12">
            <?php
              if ($_GET['id'])
              {
                $vhid = $_GET['id'];

                $query = "SELECT * FROM `booking` WHERE `vehicleid`='$vhid' limit 1";
                $result = mysqli_query($conn,$query) or die('query error');
                             
                if ($result)
                {
                  while ($row = mysqli_fetch_assoc($result))
                  {
                    ?>
            
                <h4>Booking No #<?php echo $row['bookingno'];?></h4>
                
                <div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo "dashboard/".$row['vhimage']; ?>); float:left;"></div>
                        <div class="col-md-12">
                            <h4><?php echo $row['vtitle']; ?></h5>
                            <h5><span>From :</span>&nbsp<?php echo $row['pickdate'];?>&nbsp<span>To :</span><?php echo $row['dropdate'];?></h5></br>
                              <?php
                              if(isset($_POST['can']))
                              {
                                $bn = $row['bookingno'];
                                // $e = $_SESSION['email'];
                                $query = "UPDATE `booking` SET `status`='cancel' WHERE `bookingno`='$bn'";
                                $re = mysqli_query($conn,$query);

                                if($re)
                                {
                                  echo "<script>alert('Booking cancel Successfuly');</script>";
                                  echo "<script>window.location.href='mybooking.php';</script>";
                                }

                              }
                              ?>
                            <form method='post'>
                            <?php
                              if ($row['status']=='confirm')
                              {
                                ?>
                                <input type="submit" class="btn btn-success" style="float:right" value="Confirm"></input>
                                <?php
                              }
                              if($row['status']=='cancel')
                              {
                                ?>
                                  <input type="submit" class="btn btn-danger" style="float:right" value="Cancel"></input>
                                <?php
                              }
                              if($row['status']=='0')
                              {
                                ?>
                                  <input type="submit" class="btn btn-info" style="float:right" value="Not Yet Confirm" name="can" ></input>
                                <?php
                              }  
                              ?>
                              </form>
                            
                        </div>
    			  </div>
                
            </div>
          </div>
          
        </div>
        </div>
      </div>
      <hr width="500px">
      <div class="row d-inline mb-5 contact-info" >
            
            <div class="table-responsive-md" style="text-align: center; margin:0 200px 0 200px;">
            <h1 align="center">Invoice</h1><br>
                <table class="table table-bordered" >
                <thead>
                    <tr>
                    <th>Car Name</th>
                    <th>Pickup Date</th>
                    <th>Drop-off Date</th>
                    <th>Pickup Time</th>
                    <th>Drop-off Time</th>
                    <th>Total Days</th>
                    <th>Rent/Day</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo  $row['vtitle']; ?></td>
                    <td><?php echo $row['pickdate']; ?></td>
                    <td><?php echo $row['dropdate']; ?></td>
                    <td><?php echo $row['picktime']; ?></td>
                    <td><?php echo $row['picktime']; ?></td>
                    <td>
                      <?php

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
                      
                      ?>
                    
                    </td>
                    <td><?php echo $row['vprice']; ?></td>
                    <thead>
                    <tr>
                    <th colspan="6">Grand Total</th>
                        <td>
                          <?php
                            $price = $row['vprice'];
                            $total= ($price * $day);    
                            echo $total;
                          ?> 
                        </td>
                    </tr>
                    </thead>
                    
            
                </tbody>
                </table>
                <?php
                  }
                }
              }
            ?>
            </div>
            </div>
    </section>
   
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Password</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="card-body">
                  <form action="update_password.php" method="post">
                  
                    <div class="form-group">
                      <label for="c_pass">current Password</label>
                      <input type="password" class="form-control" id="current_password" name="c_pass" aria-describedby="NameHelp"
                        placeholder="Enter Current Password">
                    </div>
                    <div class="form-group">
                      <label for="n_pass">New Password</label>
                      <input type="password" class="form-control" id="new_Password" name="n_pass" aria-describedby="Mobile NoHelp"
                        placeholder="Enter New Password">
                    </div>
                    <div class="form-group">
                      <label for="co_pass">Confirm Password</label>
                      <input type="password" class="form-control" id="co_password" name="co_pass" aria-describedby="Mobile NoHelp"
                        placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-secondary" id="submit" name="submit" >
                      
                    </div>
         

      <!-- Modal footer -->
      <div class="modal-footer">
        
      </div>
      </form>
        </div>
      </div>

    </div>
  </div>
</div>
  
<?php
      include('footer.php');
?>