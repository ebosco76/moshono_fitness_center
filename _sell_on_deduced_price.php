<?php

    require "includes/db.php";
    $bought_by = $_POST["bought_by"];
    $product_quantity = $_POST["product_quantity"];

    $product_id = $_POST["product_id"];
    $productPrice = $_POST["productPrice"];
    $amount_received = $_POST["amount_received"];
    $total_price = $productPrice * $product_quantity;
    $remaining_amount = ($productPrice * $product_quantity) - $amount_received;
    $selling_date = date('Y-m-d');
    
    //staff table
    $staff = "INSERT INTO `selling_product` (`product_id`, `product_quantity`, `client_id_no`, `total_price`, `received_amount`, `remaining_amount`, `selling_date`) 
    VALUES ('$product_id','$product_quantity','$bought_by','$total_price','$amount_received','$remaining_amount','$selling_date')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        
        $update = "UPDATE `product` SET `product_quantity` = product_quantity - $product_quantity WHERE product_id = $product_id";
        $rst = mysqli_query($conn,$update);

        $_SESSION['message'] = "Product has been sold successfull";
        header('location: product_selling.php');
    }else{
        $_SESSION['message'] = "There is an error in selling registration";
        header('location: product_selling.php');
    }

?>