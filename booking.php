<?php
      include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking</title>
	<link rel="stylesheet" href="css/bookform.css">
</head>
<body>
	
</body>
</html>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_second.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car Booking<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Car Booking</h1>
          </div>
        </div>
      </div>
    </section>
		

	<section class="ftco-section ftco-car-details">
      <div class="container">
      	<div class="row justify-content-center">
		  <?php
                    if (isset($_GET['id']))
                    {
                        $vhid = $_GET['id'];
                        
                        $query = " SELECT * FROM `cars` WHERE `c_id`='$vhid' ";
                        $result = mysqli_query($conn,$query);

                        if (mysqli_num_rows($result)>0)
                        {
                            
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    ?>
      		<div class="col-md-6">
      			<div class="car-details">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo "dashboard/".$row['image1']; ?>" alt="First slide">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo "dashboard/".$row['image2']; ?>" alt="Second slide">
				</div>
				<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo "dashboard/".$row['image3']; ?>" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			</div>
</div>
      				<div class="text text-center">
      					<span class="subheading">Cheverolet</span>
      					<h2><?php echo $row['car_name']; ?></h2>
      				</div>
      			</div>
      		</div>
      	</div>
		  
      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Mileage
		                	<span><?php echo $row['milage'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Transmission
		                	<span><?php echo $row['transmission'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Seats
		                	<span><?php echo $row['seats'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Luggage
		                	<span><?php echo $row['luggage'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel
		                	<span><?php echo $row['fuel_type'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
								
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
											<?php
												if( $row['aircondition']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Airconditions</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Airconditions</li>";
												}
											?>
											
											<!-- <?php
												if( $row['gps']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>GPS</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>GPS</li>";
												}
											?> -->
											
											<?php
												if( $row['luggage']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Luggage</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Luggage</li>";
												}
											?>
											
											<?php
												if( $row['music']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Music</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Music</li>";
												}
											?>
						    				
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
										<?php
												if( $row['seat_belt']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Seat Belt</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Seat Belt</li>";
												}
											?>
											
											<?php
												if( $row['powerdoorlocks']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Powerdoorlocks</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Powerdoorlocks</li>";
												}
											?>
											
											<?php
												if( $row['bluethooth']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Bluetooth</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Bluetooth</li>";
												}
											?>
											
											<?php
												if( $row['onboard_computer']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Onboard computer</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Onboard computer</li>";
												}
											?>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
										<?php
												if( $row['audio_input']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Audio input</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Audio input</li>";
												}
											?>
											
											<?php
												if( $row['car_kit']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Car Kit</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Car Kit</li>";
												}
											?>
											
											<?php
												if( $row['child_seat']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Chiled seat</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Chiled seat</li>";
												}
											?>
											
											<?php
												if( $row['remote_lock']==1)
												{
													echo "<li class='check'><span class='ion-ios-checkmark'></span>Remote central locking</li>";
												}
												else
												{
													echo "<li class='remove'><span class='ion-ios-close'></span>Remote central locking</li>";
												}
											?>
						    				
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?php echo $row['description']; ?></p>
									
						    </div>

						  </div>
						</div>
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
    </section>
	<section>
			<div class="col-md-4 d-flex align-items-center">
	  			<form action="#" method="post" enctype="multipart/form-data" class="request-form ftco-animate bg-primary" align="center">
		          		<h2>Make your trip</h2>
			    		  <div class="d-flex">
			    			<div class="form-group mr-2">
			                <label for="" class="label">Pick-up date</label></br>
			                <input type="date" name="pickdate" value="2023-03-09">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Drop-off date</label>
			                <input type="date" name="dropdate" value="2023-03-09">
			              </div>
		              </div>
		              <div class="form-group ml-1	">
		                <label for="" class="label">Pick-up time</label>
		                <input type="time"  name="picktime"  min="09:00" max="18:00" required>
		              </div>
					  <div class="form-group ml-1">
		                <label for="" class="label">Drop-off time</label>
		                <input type="time"   name="droptime"  min="09:00" max="18:00" class="ui-timepicker-input" required>
		              </div>
					  <div class="form-group">
		                <label for="" class="label">Adharcard</label>
		                <input type="file" name="img1" class="form-control"  >
		              </div>
					  <div class="form-group">
		                <label for="" class="label">licens</label>
		                <input type="file" name="img2" class="form-control"  >
		              </div>
			            <div class="form-group">
			              <input type="submit" name="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	  					</div>
	</section>


    
<?php
      include('footer.php');
?>
<?php

	if (isset($_POST['submit'])) 
	{
		if(!isset($_SESSION['logedin']))
		{
			echo "<script>alert('please login...');</script>";			
			echo "<script>window.location.href='login.php'</script>";
		}
		else
		{
			$vhid = $_GET['id'];

			$qry = "SELECT * FROM cars where `c_id`='$vhid'";
			$res = mysqli_query($conn,$qry);

			if ($res) 
			{
				while($row = mysqli_fetch_assoc($res))
				{
					$vhimage = $row['image1'];
					$vtitle = $row['car_name'];
					$vprice = $row['price_day'];
				}	

			}
			
			$pdate = $_POST['pickdate'];
			$ddate = $_POST['dropdate'];
			
			
							
				$sql = "SELECT * FROM booking WHERE vehicleid = '$vhid' AND pickdate <= '$pdate' AND dropdate >= '$ddate'";
				$result1 = mysqli_query($conn, $sql);

				// Check for errors
				if (!$result1) 
				{
				die("Query error: " . mysqli_error($conn));
				}

				// Check if there are any bookings for the car on the given day
				if (mysqli_num_rows($result1) > 0)
				{
					echo "<script>alert('This car is already booked on the selected date.');</script>";
					echo "<script>window.location.href='car.php'</script>";
				
				} 
				else 
				{
					$pdate = $_POST['pickdate'];
					$ddate = $_POST['dropdate'];
					$ptime = $_POST['picktime'];
					$dtime = $_POST['droptime'];
					$booking_no = (mt_rand(100000000,999999999));
					$useremail = $_SESSION['email'];
				
					$file1 = $_FILES['img1']['name'];
					$file_tmp1 = $_FILES['img1']['tmp_name'];
		
					$file2 = $_FILES['img2']['name'];
					$file_tmp2 = $_FILES['img2']['tmp_name'];
		
					$folder1 ="adharcard/".$file1;
					$folder2 ="driving_licence/".$file2;
		
					move_uploaded_file($file_tmp1,$folder1);
					move_uploaded_file($file_tmp2,$folder2);

					$query ="INSERT INTO `booking` (`bookingno`, `vehicleid`, `useremail`, `pickdate`, `dropdate`, `picktime`, `droptime`, `adharcard`, `driving_licence`,`vtitle`,`vhimage`,`vprice`)
							VALUES ('$booking_no', '$vhid', '$useremail', '$pdate', '$ddate', '$ptime', '$dtime', '$folder1', '$folder2','$vtitle','$vhimage','$vprice')";       
					
					$result = mysqli_query($conn,$query) or die("query error");

					if ($result) 
					{
						echo "<script>alert('booking successfully..');</script>";
						echo "<script>window.location.href='mybooking.php?id=$vhid'</script>";
						
					}
					else
					{
						echo "<script>alert('Something Went Wrong');</script>";
					}
				}
		}

		
	}
?>