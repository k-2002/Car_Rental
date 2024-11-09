<?php
    include('connection.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['c_id'];
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $fuel = $_POST['fuel'];
        $seats = $_POST['seats'];
        $milage = $_POST['milage'];
        $trans = $_POST['trans'];
        $laggage = $_POST['luggage'];

        $img1 = $_FILES['image1']['name'];
		$img_tmp1 = $_FILES['image1']['tmp_name'];
        $path1 ="dist/images/".$img1;
        move_uploaded_file($img_tmp1,$path1);

        $img2 = $_FILES['image2']['name'];
		$img_tmp2 = $_FILES['image2']['tmp_name'];
        $path2 ="dist/images/".$img2;
        move_uploaded_file($img_tmp2,$path2);

        $img3 = $_FILES['image3']['name'];
	    $img_tmp3 = $_FILES['image3']['tmp_name'];
        $path3 ="dist/images/".$img3;
        move_uploaded_file($img_tmp3,$path3);

        $img4 = $_FILES['image4']['name'];
		$img_tmp4 = $_FILES['image4']['tmp_name'];
        $path4 ="dist/images/".$img4;
        move_uploaded_file($img_tmp4,$path4);
        
        $air = $_POST['air'];
        $a_input = $_POST['audio'];
        $kit = $_POST['kit'];
        $cseat = $_POST['child'];
        $blu = $_POST['bluethooth'];
        $music = $_POST['music'];
        $pow = $_POST['pow']; 
        $sbelt = $_POST['seat_belt'];
        $o_c =$_POST['onboard_computer'];
        $remote =$_POST['remote_lock'];
        $desc = $_POST['description'];  

        $query = " UPDATE `cars` SET `c_id` = '$id',`car_name` = '$name',`Brand`='$brand', `price_day` = '$price', 
                `fuel_type` = '$fuel', `seating` = '$seats', `image1` = '$path1', `image2` = '$path2', 
                `image3` = '$path3', `image4` = '$path4', `milage` = '$milage', `transmission` = '$trans', 
                `laggage` = '$laggage', `aircondition` = '$air', `audio_input` = '$a_input', 
                `car_kit` = '$kit', `child_seat` = '$cseat', `bluethooth` = '$blu', `music` = '$music', 
                `powerdoorlocks` = '$pow',`seat_belt` = `$sbelt`,`onboard_computer`=`$o_c`,`remote_lock`=`$remote`,`description`='$desc' WHERE `cars`.`c_id` = $id";
        
        $result = mysqli_query($conn,$query);

        if ($result)
        {
            echo "<script>alert('update successfully');</script>";
            echo "<script>window.location.href='man_car.php';</script>";
        }
        else
        {
            echo "<script>alert('update successfully');</script>";
            echo "<script>window.location.href='man_car.php';</script>";
        }
    }


?>