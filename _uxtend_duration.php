<?php

    require "includes/db.php";

    $client_id_no = $_POST["client_id_no"];
    $programType = $_POST["programType"];
    $receivedby = $_POST["receivedby"];

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

    $history = "INSERT INTO `history`(`client_id_no`, `package_id`, `program_type`, `end_of_program_date`,`registeredby`) 
                SELECT `client_id_no`, `package_id`, `program_type`, `end_of_program_date`,`registeredby`
                FROM clients
                WHERE `client_id_no` = $client_id_no";
    $rst_history = mysqli_query($conn,$history);
    if($rst_history){
        $paymentextension = "UPDATE `clients` SET 
                            `package_id` = '$package_id', 
                            `program_type` = '$programType', 
                            `end_of_program_date` = '$end_of_program_date', 
                            `amount_paid` = '$receivedAmount', 
                            `remaining_amount` = '$remaining_amount', 
                            `registeredby` = '$receivedby' 
                            WHERE client_id_no = $client_id_no";
        $spdated = mysqli_query($conn,$paymentextension);
        if($spdated){
            $_SESSION['message'] = "Member's duration has been extended successfull";
            header('location: payments.php');
        }else{
            $_SESSION['message'] = "There is an error in extending member's duration";
            header('location: payments.php');
        }
    }else{
        $_SESSION['message'] = "There is an error in extending member's duration";
        header('location: payments.php');
    }
?>