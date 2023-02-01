<?php

    require "includes/db.php";
    $selling_id = $_POST["selling_id"];
    $received_amount = $_POST["received_amount"];
    
    //staff table
    $staff = "UPDATE `selling_product` SET `remaining_amount` = `remaining_amount` - $received_amount, `received_amount` = `received_amount` + $received_amount WHERE `selling_id` = $selling_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Product payment has been made successfull";
        header('location: products_bought_by_deduction.php');
    }else{
        $_SESSION['message'] = "There is an error in product payment";
        header('location: products_bought_by_deduction.php');
    }

?>