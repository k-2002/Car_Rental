<?php
    include('connection.php');

    $id = $_GET['id'];

    $query ="DELETE FROM `contact` WHERE `contact`.`id` = $id";
    $result =mysqli_query($conn,$query);

    if ($result)
    {
        echo "<script>alert('delete successfully....');</script>";
        echo "<script>window.location.href='man_contact.php';</script>";
    }
    else
    {
        echo "<script>alert('sorry....');</script>";
        echo "<script>window.location.href='man_contact.php';</script>";
    }
?>