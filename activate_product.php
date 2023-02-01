<?php

    require "includes/db.php";
    $product_id = base64_decode($_GET["activate"]);
    
    //staff table
    $staff = "UPDATE `product` SET `status` = 1 WHERE product_id = $product_id";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $_SESSION['message'] = "Product has been activated successfull";
        header('location: view_product.php');
    }else{
        $_SESSION['message'] = "There is an error in deactivating product";
        header('location: view_product.php');
    }
?>