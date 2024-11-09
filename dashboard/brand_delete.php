<?php
    include('connection.php');
    if (!isset($_SESSION['adminname']))
    {
      echo "<script>window.location.href='adminlogin.php';</script>";
    }

    $id = $_GET['id'];

    $query ="DELETE FROM `brand` WHERE `brand`.`id` = $id";
    $result =mysqli_query($conn,$query);

    if ($result)
    {
        echo "<script>alert('delete successfully....');</script>";
        echo "<script>window.location.href='man_brand.php';</script>";
    }
    else
    {
        echo "<script>alert('sorry....');</script>";
        echo "<script>window.location.href='man_brand.php';</script>";
    }
?>