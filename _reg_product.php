<?php

    require "includes/db.php";
    $staff_id = $_SESSION["staff_id"];
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    $product_quantity = $_POST["product_quantity"];
    
    //image upload section
    $myfile = $_FILES["productImg"]["name"];
    $size = $_FILES["productImg"]["size"];
    $temp = $_FILES["productImg"]["tmp_name"];
    $type = $_FILES["productImg"]["type"];
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
            header('location: view_members.php');
        }
    }else{
        $_SESSION['message'] = "Uploaded file has invalid format";
        header('location: view_members.php');
    }
    //.image upload section


    //staff table
    $staff = "INSERT INTO `product`( `product_name`, `product_img`, `product_price`,`product_quantity`) 
    VALUES ('$productName','$filepath','$price','$product_quantity')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        //$last_id = mysqli_insert_id($conn);
        $_SESSION['message'] = "Product has been registered successfull";
        header('location: view_product.php');
    }else{
        $_SESSION['message'] = "There is an error in Product registration";
        header('location: view_product.php');
    }

?>