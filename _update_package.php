<?php

    require "includes/db.php";
    $package_id = $_POST["package_id"];
    $packageName = $_POST["packageName"];
    $NumberOfDays = $_POST["NumberOfDays"];
    $PackagePrice = $_POST["PackagePrice"];
    $PackageDiscount = $_POST["PackageDiscount"];
    $PackageDescription = $_POST["PackageDescription"];
    
    //package table
    $staff = "UPDATE `packages` SET `package_name` = '$packageName', `number_of_days` = '$NumberOfDays', `package_price` = '$PackagePrice', `package_discount` = '$PackageDiscount', `package_description` = '$PackageDescription' WHERE package_id = $package_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Package has been updated successfull";
        header('location: packages.php');
    }else{
        $_SESSION['message'] = "There is an error in Package updation";
        header('location: packages.php');
    }

?>