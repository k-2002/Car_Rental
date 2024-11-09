<?php
    include('header.php');
?>
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
	            	</div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
	  							<div class="row d-flex mb-4">
					          
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Select the Best Car</h3>
					              </div>
					            </div>      
					          </div>
							  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-Calendar"><img src="dashboard/dist/img/calendar.png " style="width:40px;, height:40px;"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choose Your Pick-up/Drop-off Date</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="car.php" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">



    					<?php
                        $query = "SELECT * FROM `cars`  order by RAND() limit 6";
                        $result = mysqli_query($conn,$query);

                        if (mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                ?>      
    						<div class="item">
						<div class="car-wrap rounded ftco-animate">
		    					 <div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo "dashboard/".$row['image1']; ?>);">
		    					</div>	
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $row['car_name']; ?></a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat"><?php echo $row['Brand']; ?></span>
			    						<p class="price ml-auto"><?php echo $row['price_day']; ?><span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="booking.php?id=<?php echo $row['c_id']; ?>" class="btn btn-primary py-2 mr-1">Book now</a> <a href="booking.php?id=<?php echo $row['c_id']; ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div> 
							</div>
							</div>
		    				
							<?php
                            }
                        }
                        else
                        {
                            ?>
                              <h2>No Data Found</h2>
                            <?php
                        }
                        ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

<?php
      include('footer.php');
?>