<?php

    require "includes/db.php";
    $staff_id = $_SESSION["staff_id"];

    //image upload section
    $myfile = $_FILES["memberProfile"]["name"];
    $size = $_FILES["memberProfile"]["size"];
    $temp = $_FILES["memberProfile"]["tmp_name"];
    $type = $_FILES["memberProfile"]["type"];
    $dir = "dist/img/";

    $imgExt = strtolower(pathinfo($myfile,PATHINFO_EXTENSION)); //get image extension
    
    //valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //valid extensions
    
    //rename uploading image
    if(!empty($myfile)){
        $filepath = rand(1000,1000000).".".$imgExt;
    }else{
        $filepath = "System logo.png";
    }

    //allow valid image file formats
    if(in_array($imgExt,$valid_extensions)){
        //check file size '5MB'
        if($size < 5000000){
            move_uploaded_file($temp,$dir.$filepath);
        }else{
            $_SESSION['message'] = "Uploaded file seems to be above 5MB";
            header('location: view_members.php');
        }
    }else{
        $_SESSION['message'] = "Uploaded file has invalid format";
        header('location: view_members.php');
    }
    //.image upload section

    
    $client_email = $_POST["client_email"];
    $fullName = $_POST["fullName"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $date_of_reception = date("Y-m-d");
    
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $programType = $_POST["programType"];

    $duration = explode(",",$_POST["duration"]);
    $package_id = $duration[0];
    $package_price = $duration[1];

    If($package_id == 1){
        $end_of_program_date = date('Y-m-d', strtotime('7 days'));
    }elseif($package_id == 2){
        $end_of_program_date = date('Y-m-d', strtotime('30 days'));
    }elseif($package_id == 3){
        $end_of_program_date = date('Y-m-d', strtotime('60 days'));
    }else{
        $end_of_program_date = date('Y-m-d', strtotime('90 days'));
    }

    $receivedAmount = $_POST["receivedAmount"];
    $remaining_amount = $package_price - $receivedAmount;
    $phoneNumber = $_POST["phoneNumber"];

    //staff table
    $staff = "INSERT INTO `clients`( `fullname`, `age`, `gender`, `date_of_reception`, `progress_date`, `weight`, `height`, `package_id`, `program_type`, `end_of_program_date`, `amount_paid`, `remaining_amount`, `phoneno`, `client_email`, `profile_pic`, `registeredby`) 
    VALUES ('$fullName','$age','$gender','$date_of_reception','$date_of_reception','$weight','$height','$package_id','$programType','$end_of_program_date','$receivedAmount','$remaining_amount','$phoneNumber','$client_email','$filepath','$staff_id')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        //$last_id = mysqli_insert_id($conn);
        $_SESSION['message'] = "Member has been registered successfull";
        header('location: view_members.php');
    }else{
        // echo mysqli_error($conn);
        $_SESSION['message'] = "There is an error in member registration";
        header('location: view_members.php');
    }
?>