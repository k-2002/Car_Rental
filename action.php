<?php

    session_start();
    include('connection.php');

    if (isset($_POST['login'])) {
        
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $pass = mysqli_real_escape_string($conn,$_POST['pass']);

        $query = " SELECT * FROM `register` WHERE `email`='$email' AND `password`='$pass' ";

        $result = mysqli_query($conn,$query) or die("query error");

        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['logedin'] = true;
                $_SESSION['email']=$_POST['email'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                echo "<script>alert('Login successfully');</script>";
                echo "<script>window.location.href='index.php'</script>";
            }
        }
        else
        {
            echo "<script>alert('please try again...');</script>";
            echo "<script>window.location.href='login.php'</script>";
        }   
    }

?>