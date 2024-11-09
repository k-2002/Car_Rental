
<?php
// Establish a connection to the database
include('connection.php');
session_start();

if(isset($_POST['submit']))
{
    $email = $_SESSION['email'];

    $sql = "SELECT password FROM register WHERE email='$email'";
    $result = mysqli_query($conn,$sql) or die('query error');

    $row = mysqli_fetch_assoc($result);
    $c_pass = $row['password'];
        
           
    

    $e_pass = $_POST['c_pass'];
    $n_pass = $_POST['n_pass'];
    $co_pass = $_POST['co_pass'];

    if($n_pass != $co_pass)
    {
        echo "<script>alert('confirm password not match');</script>";
        echo "<script>window.location.href='mybooking.php';</script>";
    }

    if($e_pass == $c_pass)
    {
        
        $query = "UPDATE register SET `password`='$n_pass', `c_password`='$co_pass'  WHERE `email`='$email'";
        $res = mysqli_query($conn,$query) or die('query error');
        
        if($res)
        {
            echo "<script>alert('Password Update successfully');</script>";
            echo "<script>window.location.href='mybooking.php';</script>"; 
        }
        else
        {
            echo "<script>alert('Invalid Password');</script>";
            echo "<script>window.location.href='mybooking.php';</script>"; 
        }
    }

}
?>