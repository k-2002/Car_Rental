<?php

    include('connection.php');

    if (isset($_POST['submit'])) 
	{

            		
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$mno = mysqli_real_escape_string($conn,$_POST['mno']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$pass = mysqli_real_escape_string($conn,$_POST['pass']);
		$c_pass = mysqli_real_escape_string($conn,$_POST['cpass']);

		if ($pass != $c_pass) 
		{
			
			echo "<script>alert('conform password did not match: please try again...')</script>";
		}
		else{

		$query = "INSERT INTO `register` (`name`, `mo`, `email`, `password`, `c_password`) 
					VALUES ( '$fname', '$mno', '$email', '$pass', '$c_pass')";

		$data = mysqli_query($conn,$query);

		if ($data) 
		{
			
			echo "<script>alert('register successfully');</script>";
            
		}
		
		}

	}
   
    echo "<script>window.location.href='login.php';</script>";
          

?>