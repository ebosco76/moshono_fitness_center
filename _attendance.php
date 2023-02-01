<?php

    require "includes/db.php";
    date_default_timezone_set('Africa/Nairobi');

    $client_id_no = base64_decode($_GET["attendance"]);
    $attendance_date = date("Y-m-d");
    $attendance_time = date("h:i:s");

    $attendance_check = "SELECT `client_id_no`,`attendance_date` FROM `attendance` WHERE `client_id_no` = $client_id_no AND `attendance_date` = '$attendance_date'";
    $attendancerst = mysqli_query($conn,$attendance_check);

    if(mysqli_num_rows($attendancerst)>0){
        $_SESSION['message'] = "Attendance of this member has already been taken";
        header('location: attendance.php');
    }else{
        
        //attendance's table
        $staff = "INSERT INTO `attendance`( `client_id_no`,`attendance_date`, `attendance_time`) 
        VALUES ('$client_id_no', '$attendance_date', '$attendance_time')";
        $staff_results = mysqli_query($conn,$staff);
        if($staff_results){ 
            $_SESSION['message'] = "Member's attendance has been taken successfull";
            header('location: attendance.php');
        }else{
            $_SESSION['message'] = "There is an error in taking member's attendance";
            header('location: attendance.php');
        }

    }

?>