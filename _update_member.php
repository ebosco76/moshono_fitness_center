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
        $filepath = $_POST["oldprofile"];
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

    $client_id_no = $_POST["client_id_no"];
    $client_email = $_POST["client_email"];
    $fullName = $_POST["fullName"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $programType = $_POST["programType"];
    //$duration_in_days = $_POST["duration_in_days"];

    $package_id = $_POST["duration"];

    If($package_id == 1){
        $end_of_program_date = date('Y-m-d', strtotime('7 days'));
    }elseif($package_id == 2){
        $end_of_program_date = date('Y-m-d', strtotime('30 days'));
    }elseif($package_id == 3){
        $end_of_program_date = date('Y-m-d', strtotime('60 days'));
    }else{
        $end_of_program_date = date('Y-m-d', strtotime('90 days'));
    }

    $totalprogramcost = $_POST["totalprogramcost"]; // This is program cost
    $alredy_paid_amount = $_POST["alredy_paid_amount"]; //This is amount which is already cleared
    $deptAmount = $_POST["deptAmount"]; //This is dept amount in which a member is supposed to pay
    $receivedAmount = $_POST["amount_paid"]; // This is amount which is receided today in order to reduce / clear dept

    //Calculations
    $alredyamountpaid = (int)$alredy_paid_amount + (int)$receivedAmount;
    $remaining_amount = (int)$deptAmount - (int)$receivedAmount;

    $gender = $_POST["gender"];
    $phoneNumber = $_POST["phoneNumber"];

    //staff table
    $staff = "UPDATE `clients` SET `fullname` = '$fullName', `age` = '$age', `gender` = '$gender', `weight` = '$weight', `height` = '$height', `package_id` = '$package_id', `program_type` = '$programType', `end_of_program_date` = '$end_of_program_date', `amount_paid` = '$alredyamountpaid', `remaining_amount` = '$remaining_amount', `phoneno` = '$phoneNumber', `client_email` = '$client_email', `profile_pic` = '$filepath' WHERE client_id_no = $client_id_no";
    // $staff = "UPDATE `clients` SET `fullname` = '$fullName', `age` = '$age', `gender` = '$gender', `weight` = '$weight', `height` = '$height', `package_id` = '$package_id', `program_type` = '$programType', `end_of_program_date` = '$end_of_program_date', `amount_paid` = '$alredyamountpaid', `remaining_amount` = '$remaining_amount', `phoneno` = '$phoneNumber', `client_email` = '$client_email' WHERE client_id_no = $client_id_no";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        //$last_id = mysqli_insert_id($conn);
        $_SESSION['message'] = "Member's informations has been updated successfull";
        header('location: view_members.php');
    }else{
        $_SESSION['message'] = "There is an error in updating member's informations registration";
        header('location: view_members.php');
    }
?>