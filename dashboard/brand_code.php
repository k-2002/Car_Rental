<?php
    include("connection.php");

    if (isset($_POST['update'])) 
    {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $query = "UPDATE `brand` SET `brand_name` = '$name' WHERE `brand`.`id` = $id";
        $result = mysqli_query($conn,$query);

        if ($result)
        {
            echo "<script>alert('Brand Update successfully..');</script>";
            echo "<script>window.location.href='man_brand.php';</script>";
        }
        else
        {
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.href='man_brand.php';</script>";
        }
    }

    if (isset($_POST['cancel']))
    {
        echo "<script>window.location.href='man_brand.php';</script>";
    }

?>
