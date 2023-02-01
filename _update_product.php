<?php

    require "includes/db.php";
    $product_id = $_POST["product_id"];
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
        $filepath = $_POST["productprofile"];
    }

    //allow valid image file formats
    if(in_array($imgExt,$valid_extensions)){
        //check file size '5MB'
        if($size < 5000000){
            move_uploaded_file($temp,$dir.$filepath);
        }else{
            $_SESSION['message'] = "Uploaded file seems to be above 5MB";
            header('location: view_product.php');
        }
    }else{
        $_SESSION['message'] = "Uploaded file has invalid format";
        header('location: view_product.php');
    }
    //.image upload section


    //staff table
    $staff = "UPDATE `product` SET `product_name` = '$productName', `product_img` = '$filepath', `product_price` = '$price', `product_quantity` = '$product_quantity' WHERE product_id = $product_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        //$last_id = mysqli_insert_id($conn);
        $_SESSION['message'] = "Product's informations has been updated successfull";
        header('location: view_product.php');
    }else{
        $_SESSION['message'] = "There is an error in updating Product's informations";
        header('location: view_product.php');
    }



?>