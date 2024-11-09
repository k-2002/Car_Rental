<?php
    include('connection.php');

    $id = $_GET['id'];

    $query ="DELETE FROM `register` WHERE `register`.`id` = $id";
    $result =mysqli_query($conn,$query);

    if ($result)
    {
        echo "<script>alert('delete successfully....');</script>";
        echo "<script>window.location.href='reg_user.php';</script>";
    }
    else
    {
        echo "<script>alert('sorry....');</script>";
        echo "<script>window.location.href='reg_user.php';</script>";
    }
?>