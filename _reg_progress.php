<?php

    require "includes/db.php";

    //image upload section
    $myfile = $_FILES["progressImage"]["name"];
    $size = $_FILES["progressImage"]["size"];
    $temp = $_FILES["progressImage"]["tmp_name"];
    $type = $_FILES["progressImage"]["type"];
    $dir = "dist/img/";

    $imgExt = strtolower(pathinfo($myfile,PATHINFO_EXTENSION)); //get image extension
    
    //valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //valid extensions
    
    //rename uploading image
    if(!empty($myfile)){
        $filepath = rand(1000,1000000).".".$imgExt;
    }else{
        $filepath = "System logo.png";
    }

    //allow valid image file formats
    if(in_array($imgExt,$valid_extensions)){
        //check file size '5MB'
        if($size < 5000000){
            move_uploaded_file($temp,$dir.$filepath);
        }else{
            $_SESSION['message'] = "Uploaded file seems to be above 5MB";
            header('location: progress.php');
        }
    }else{
        $_SESSION['message'] = "Uploaded file has invalid format";
        header('location: progress.php');
    }
    //.image upload section

    $client_id_no = $_POST["client_id_no"];
    $progressdate = date("Y-m-d");
    $oldweight = $_POST["oldweight"];
    $newweight = $_POST["newweight"];

    //Staff's table
    $staff = "INSERT INTO `progress`( `client_id_no`, `date`, `old_weight`, `new_weight`, `progress_image`) 
    VALUES ('$client_id_no', '$progressdate', '$oldweight', '$newweight', '$filepath')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){

        $update_progress = "UPDATE `clients` SET weight = '$newweight', progress_date = '$progressdate' WHERE `client_id_no` = $client_id_no";
        $progress_rst = mysqli_query($conn,$update_progress);

        $_SESSION['message'] = "Member's progress has been recorded successfull";
        header('location: progress.php');
    }else{
        $_SESSION['message'] = "There is an error in recording member's progress";
        header('location: progress.php');
    }
 
?>