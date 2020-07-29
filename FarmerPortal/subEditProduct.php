<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];

if (isset($_POST['confirm'])) {
    $product_id = $_POST['product_id'];
    $expiry = mysqli_real_escape_string( $con, $_POST['expiry']);
    $stock = mysqli_real_escape_string( $con, $_POST['stock']);
    $price = mysqli_real_escape_string( $con, $_POST['price']);
    $del = mysqli_real_escape_string( $con, $_POST['del']);

    $query = "update products set product_expiry = '$expiry', product_stock = '$stock', product_price = '$price' where product_id = $product_id";
    $run = mysqli_query($con, $query);
    
    echo "<script>window.open('farmerProductDetails.php?id=$product_id','_self')</script>";
}
?>