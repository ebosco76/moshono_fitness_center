<?php

    require "includes/db.php";

    $member_id = $_POST["member_id"];
    $remaining_amount = $_POST["remaining_amount"]; //This is a dept of a member
    $paid_amount = $_POST["paid_amount"]; //this is a last payed amount
    $amount_paid_today = $_POST["amount_paid_today"]; //this is amount in which member has paid today
    $receivedby = $_POST["receivedby"];

    $updated_remaining_account = $remaining_amount - $amount_paid_today;
    $updated_paid_amount = $paid_amount + $amount_paid_today;

    //payment's table
    $staff = "INSERT INTO `payment` (`client_id_no`, `amount_paid`, `amount_to_be_paid`, `extended_or_reduced_amount`, `received_by`) 
    VALUES ('$member_id','$paid_amount','$remaining_amount','$amount_paid_today','$receivedby')";
    $staff_results = mysqli_query($conn,$staff);

    if($staff_results){
        $paymentDeduction = "UPDATE `clients` SET `amount_paid` = '$updated_paid_amount', `remaining_amount` = '$updated_remaining_account' WHERE client_id_no = $member_id";
        $spdated = mysqli_query($conn,$paymentDeduction);
        if($spdated){
            $_SESSION['message'] = "Member's payment informations has been updated successfull";
            header('location: payments.php');
        }else{
            $_SESSION['message'] = "There is an error in updating member's payment's informations";
            header('location: payments.php');
        }
    }else{
        $_SESSION['message'] = "There is an error in updating member's payment's informations";
        header('location: payments.php');
    }

?>