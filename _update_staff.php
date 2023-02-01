<?php

    require "includes/db.php";

    //image upload section
    $myfile = $_FILES["StaffProfile"]["name"];
    $size = $_FILES["StaffProfile"]["size"];
    $temp = $_FILES["StaffProfile"]["tmp_name"];
    $type = $_FILES["StaffProfile"]["type"];
    $dir = "dist/img/";

    $imgExt = strtolower(pathinfo($myfile,PATHINFO_EXTENSION)); //get image extension
    
    //valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //valid extensions
    
    //rename uploading image
    if(!empty($myfile)){
        $filepath = rand(1000,1000000).".".$imgExt;
    }else{
        $filepath = $_POST["olfprofile"];
    }

    //allow valid image file formats
    if(in_array($imgExt,$valid_extensions)){
        //check file size '5MB'
        if($size < 5000000){
            move_uploaded_file($temp,$dir.$filepath);
        }else{
            $_SESSION['message'] = "Uploaded file seems to be above 5MB";
            header('location: view_staffs.php');
        }
    }else{
        $_SESSION['message'] = "Uploaded file has invalid format";
        header('location: view_staffs.php');
    }
    //.image upload section

    $staff_id = $_POST["staff_id"];
    $fullName = $_POST["fullName"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $phoneNumber = $_POST["phoneNumber"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $position = $_POST["position"];

    //Staff's table
    $staff = "UPDATE `staff` SET `image` = '$filepath', `fullname` = '$fullName', `gender` = '$gender', `age` = '$age', `phoneno` = '$phoneNumber' , `position` = '$position' WHERE staff_id = $staff_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "$position's informations has been updated successfull";
        header('location: view_staffs.php');
    }else{
        $_SESSION['message'] = "There is an error in updating $position's informations";
        header('location: view_staffs.php');
    }

?>