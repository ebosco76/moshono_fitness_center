<?php

    require "includes/db.php";
    $staff_id = $_SESSION["staff_id"];

    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $gender = $_POST["gender"];
    $date_of_reception = date("Y-m-d");
    
    //staff table
    $staff = "INSERT INTO `daily_clients`(`full_name`, `phone_number`, `gender`, `reg_date`, `registeredby`) 
    VALUES ('$fullName', '$phoneNumber', '$gender', '$date_of_reception', '$staff_id')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Member has been registered successfull";
        header('location: view_daily_members.php');
    }else{
        $_SESSION['message'] = "There is an error in member registration";
        header('location: view_daily_members.php');
    }
?>