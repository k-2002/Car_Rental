<?php
      include('header.php');
?>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_second.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Profile</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
			<div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
            </div>
                <div class="card-body">
                <?php
					
					$query = "SELECT * FROM `register` where `id`='{$_SESSION['id']}'";
					$result = mysqli_query($conn,$query);

					  if (mysqli_num_rows($result)>0) {
						while($row=mysqli_fetch_assoc($result))
						{
							
                    		?>
                              
                  <form action="profile_code.php" method="post">
                  <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="Mobile No">Mobile No</label>
                      <input type="number" class="form-control" id="Mobile No" name="mno"  value="<?php echo $row['mo']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" value="<?php echo $row['password']; ?>">
                      <input type="hidden" class="form-control" id="exampleInputPassword1" name="c_pass" value="<?php echo $row['c_password']; ?>">
                    </div>
                    <button type="submit" name="cancel" class="btn btn-primary">Cancel</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                  </form>
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
              </div>
			</div>
				</div>
		</section>
    
<?php
      include('footer.php');
?>