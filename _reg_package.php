<?php

    require "includes/db.php";
    $packageName = $_POST["packageName"];
    $NumberOfDays = $_POST["NumberOfDays"];
    $PackagePrice = $_POST["PackagePrice"];
    $PackageDiscount = $_POST["PackageDiscount"];
    $PackageDescription = $_POST["PackageDescription"];
    
    //package table
    $staff = "INSERT INTO `packages`( `package_name`, `number_of_days`, `package_price`, `package_discount`, `package_description`) 
    VALUES ('$packageName','$NumberOfDays','$PackagePrice','$PackageDiscount','$PackageDescription')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Package has been registered successfull";
        header('location: packages.php');
    }else{
        $_SESSION['message'] = "There is an error in Package registration";
        header('location: packages.php');
    }

?>