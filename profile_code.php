<?php
    include('connection.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $mo = $_POST['mno'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $c_pass = $_POST['c_pass'];
        
        $query = " UPDATE `register` SET `id` = '$id', `name` = '$name', `mo` = '$mo', `email` = '$email', `password` = '$pass' ,`c_password`='$pass'WHERE `register`.`id` = $id ";
        $result = mysqli_query($conn,$query);

        if ($result)
        {
            echo "<script>alert('update Profile successfully');</script>";
            echo "<script>window.location.href='profile.php';</script>";
        }
        else
        {
            echo "<script>alert('something went wrong');</script>";
            echo "<script>window.location.href='profile.php';</script>";
        }
        
    }

    if (isset($_POST['cancel'])) 
    {
        header("location:profile.php");
    }
 ?>