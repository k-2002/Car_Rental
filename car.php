<?php
      include('header.php');
	  
?>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_second.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
        <?php
             $query1 = "SELECT * FROM `brand` ";
             $result1 = mysqli_query($conn,$query1);

             if (mysqli_num_rows($result1)>0)
             {
                 while($row1=mysqli_fetch_assoc($result1))
                 {
                    $brand_name = $row1['brand_name'];
                 }
              }
        ?>
			<?php
                        $query = "SELECT * FROM `cars`";
                        $result = mysqli_query($conn,$query);

                        if (mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                ?>  
								
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(<?php echo "dashboard/".$row['image1']; ?>);">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="booking.php"><?php echo $row['car_name']; ?></a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat"><?php echo $row['Brand'];?></span>
	    						<p class="price ml-auto"><?php echo $row['price_day']; ?><span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="booking.php?id=<?php echo $row['c_id'];?>" class="btn btn-primary py-2 mr-1">Book now</a> <a href="booking.php?id=<?php echo $row['c_id']; ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
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
    			
    		
    	</div>
    </section>
    

<?php
      include('footer.php');
?>