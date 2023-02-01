<?php

    require "includes/db.php";
    $package_id = base64_decode($_GET["deactivate"]);
    
    //staff table
    $staff = "UPDATE `packages` SET `status` = 0 WHERE package_id = $package_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Package has been deactivated successfull";
        header('location: packages.php');
    }else{
        $_SESSION['message'] = "There is an error in deactivating Package";
        header('location: packages.php');
    }
?>