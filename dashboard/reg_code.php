<?php
    include('connection.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $mo = $_POST['mno'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $query = " UPDATE `register` SET `id` = '$id', `name` = '$name', `mo` = '$mo', `email` = '$email', `password` = '$pass' WHERE `register`.`id` = $id ";
        $result = mysqli_query($conn,$query);

        if ($result)
        {
            echo "<script>alert('update successfully');</script>";
            echo "<script>window.location.href='reg_user.php';</script>";
        }
        else
        {
            echo "<script>alert('something went wrong');</script>";
            echo "<script>window.location.href='reg_user.php';</script>";
        }
        
    }

    if (isset($_POST['cancel'])) 
    {
        header("location:reg_user.php");
    }
 ?>