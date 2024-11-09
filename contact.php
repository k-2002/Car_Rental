<?php

  include('connection.php');

    if (isset($_POST['submit'])) {
      
      $name  = $_POST['name'];
      $email = $_POST['email'];
      $sub   = $_POST['sub'];
      $msg   = $_POST['msg'];

      $query = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) 
                VALUES ('$name', '$email', '$sub', '$msg')";
      
      $result = mysqli_query($conn,$query);

      if ($result) 
      {
        
        echo "<script>alert('Messagge send successfully..');</script>";

      }
      else{
        echo "<script>alert('somthing went wrong.');</script>";
      }

    }



?>
<?php
      include('header.php');
?>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_second.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
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
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> Dom Car Rental, Taleti Road, Palitana.</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">+91 9429062434</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">domcarrental@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form action="#" method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="sub">
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" class="form-control" placeholder="Message" name="msg"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
      </div>
    </section>
	

<?php
      include('footer.php');
?>