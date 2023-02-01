<?php

    require "includes/db.php";
    $product_id = $_POST["product_id"];
    $date_of_reception = date("Y-m-d");
    $product_quantity = $_POST["product_quantity"];
    $total_bill = $_POST["total_bill"];

    //staff table
    $staff = "INSERT INTO `selling_product`( `product_id`, `product_quantity`, `total_price`, `selling_date`) 
    VALUES ('$product_id','$product_quantity','$total_bill','$date_of_reception')";
    $staff_results = mysqli_query($conn,$staff);
    if($staff_results){
        $update = "UPDATE `product` SET `product_quantity` = product_quantity - $product_quantity WHERE product_id = $product_id";
        $rst = mysqli_query($conn,$update);

        $_SESSION['message'] = "Product has been sold successfull";
        header('location: product_selling.php');
    }else{
        $_SESSION['message'] = "There is an error in selling this product";
        header('location: product_selling.php');
    }
?>