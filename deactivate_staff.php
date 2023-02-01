<?php

    require "includes/db.php";
    $staff_id = base64_decode($_GET["deactivate"]);
    
    //staff table
    $staff = "UPDATE `staff` SET `status` = 0 WHERE staff_id = $staff_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Staff has been deactivated successfull";
        header('location: view_staffs.php');
    }else{
        $_SESSION['message'] = "There is an error in deactivating staff";
        header('location: view_staffs.php');
    }
?>