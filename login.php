<?php
  include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/form.css">
</head>
<body>
	
</body>
</html>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_second.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Login/register <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Login/Registration</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="form">
		<div class="container0" id="container0">
		<div class="form-container sign-up-container">
			<form action="register.php" method="post" onSubmit="return valid();" class="lr_form">
				<h1>Create Account</h1>
			
			<span class="f_s">or use your email for registration</span>
			<input type="text" placeholder="User Name" name="fname" required/>
			<input type="number" placeholder="Mobile No" name="mno" required/>
		
			
			<input type="email" id="email" name="email" placeholder="Email" size="40" required>
			<input type="password" placeholder="Password" name="pass" required/>
			<input type="password" placeholder="conformed Password" name="cpass" required/>
			<input type="submit" name="submit" value="Sign Up" class="sub1"/>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="action.php" method="post" class="lr_form">
			<h1>Sign in</h1>
			
			<span class="f_s"> or use your account</span>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="password" name="pass" placeholder="Password" required/>
			<a href="#">Forgot your password?</a>
			<input type="submit" name="login" value="Sign In" class="sub1"/>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay0">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container0');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
    </script>

 </section>

<?php 
      include('footer.php');
?>