<?php

    require "includes/db.php";
    $client_id_no = base64_decode($_GET["activate"]);
    
    //staff table
    $staff = "UPDATE `clients` SET `member_status` = 1 WHERE client_id_no = $client_id_no";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        //$last_id = mysqli_insert_id($conn);
        $_SESSION['message'] = "Member has been Activated successfull";
        header('location: view_members.php');
    }else{
        $_SESSION['message'] = "There is an error in activating this member";
        header('location: view_members.php');
    }
?>