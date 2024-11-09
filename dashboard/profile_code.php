<?php
    include('connection.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        $query = " UPDATE `adminlogin` SET `id` = '$id', `username` = '$name',  `password` = '$pass' WHERE `adminlogin`.`id` = $id ";
        $result = mysqli_query($conn,$query);

        if ($result)
        {
            echo "<script>alert('update successfully');</script>";
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