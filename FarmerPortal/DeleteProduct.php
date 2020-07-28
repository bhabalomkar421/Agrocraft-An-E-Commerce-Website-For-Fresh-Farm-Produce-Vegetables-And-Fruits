<?php
include("../Functions/functions.php");
$sess_phone_number = $_SESSION['phonenumber'];
if (isset($_GET['id'])) {
     $product_id = $_GET['id'];
     $farmer_query = "select * from farmerregistration where farmer_phone = $sess_phone_number";
     $find_farmer = mysqli_query($con, $farmer_query);
     while ($row = mysqli_fetch_array($find_farmer)) {
        $farmer_id = $row['farmer_id'];
     }
     $delete_product = "delete from products where product_id = '$product_id' and farmer_fk = '$farmer_id'";
     $run_delete = mysqli_query($con, $delete_product);
     if($run_delete)

     echo "<script>window.open('MyProducts.php','_self')</script>";
}
?>