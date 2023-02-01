<?php

    require "includes/db.php";

    $full_name = $_GET["full_name"];
    $phone_number = $_GET["phone_number"];
    $gender = $_GET["gender"];
    $date_of_reception = date("Y-m-d");
    $staff_id = $_SESSION["staff_id"];

    $history = "INSERT INTO `daily_clients`(`full_name`, `phone_number`, `gender`, `reg_date`, `registeredby`) 
                VALUES('$full_name', '$phone_number', '$gender', '$date_of_reception', '$staff_id')";
    $rst_history = mysqli_query($conn,$history);
    if($rst_history){
        $_SESSION['message'] = "Member has been registered successfull";
        header('location: view_daily_members.php');
    }else{
        $_SESSION['message'] = "There is an error in member registration";
        header('location: view_daily_members.php');
    }
?>