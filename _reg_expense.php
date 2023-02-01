<?php

    require "includes/db.php";
    $staff_id = $_SESSION["staff_id"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $expense_date = date("Y-m-d");


    //staff table
    $staff = "INSERT INTO `expenses`( `description`, `expense_price`, `expense_date`, `recorded_by`) 
    VALUES ('$description','$price','$expense_date','$staff_id')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        //$last_id = mysqli_insert_id($conn);
        $_SESSION['message'] = "Expense has been registered successfull";
        header('location: view_expenses.php');
    }else{
        $_SESSION['message'] = "There is an error in Expense registration";
        header('location: view_expenses.php');
    }



?>