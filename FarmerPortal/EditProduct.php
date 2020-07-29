<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];

?>
<?php      
    $product_id = $_GET['id'];
    echo "<input style='text-color:white;color:white;' type = 'hidden' name = 'product_id' value=$product_id readonly><br><br>";
    $sql = "select * from products where product_id = $product_id";
    $run_query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($run_query)) {
        $product_title = $row['product_title'];
        $product_cat = $row['product_cat'];
        $product_type = $row['product_type'];
        $product_expiry = $row['product_expiry'];
        $product_stock = $row['product_stock'];
        $product_price = $row['product_price'];
        $product_delivery = $row['product_delivery'];
        }
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
     #staticEmail{
        text-align:center;
         border-style:solid;
        border-color:black;
        /* background-color:#ff5500;*/
        width:30%;
        font-size:20px;
        color:black; 
    } 
    .text {
        background-color: black;
        color: gold;
        font-size:18px;
    }
    input{
        text-align:center;
        /* border-style:solid;
        border-color:black; */
        background-color:#ff5500;
        width:50%;
        color:red;
    }
    .text {
        min-width: 180px !important;
        display: inline-block !important
    }

    .inp {
        width: 10%;
    }

    .s {
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-top:0%;
        margin-bottom:4%;
    
    }
    
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
    .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        .text {
        min-width: 150px !important;
        display: inline-block !important
    }}
    </style>
</head>
<body>

<div class="container" >
    <br>
    <div class="text-center"><h2><b>Your Profile</h2></b></div>
        <div class="form">
            <form action="subEditProduct.php" method=POST>
                <?php      
                    $product_id = $_GET['id'];
                    echo "<input style='text-color:white;color:white;' type = 'hidden' name = 'product_id' value=$product_id readonly><br><br>";
                    ?>
                <div class="input-group mt-4 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-user mr-2"></i>product title</span>
                    </div>
                    <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $product_title?>">
                </div>
                <div class="input-group mt-4 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-phone-alt mr-2"></i>product category</span>
                    </div>
                    <input type="phonenumber" readonly class="form-control-plaintext border border-dark" id="staticEmail" value=" <?php echo $product_cat ?>">
                </div>
                <div class="input-group mt-4 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-home mr-2"></i>product expiry</span>
                    </div>
                    <input type="text" class="form-control-plaintext border border-dark" name ="expiry" id="staticEmail" value="<?php echo $product_expiry ?>">
                </div> 
                <div class="input-group mt-4 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>product stock</span>
                    </div>
                    <input type="text" class="form-control-plaintext border border-dark" name ="stock"  id="staticEmail" value=" <?php echo $product_stock ?>">
                </div> 
                <div class="input-group mt-4 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>product price</span>
                    </div>
                    <input type="text"  class="form-control-plaintext border border-dark" name ="price" id="staticEmail" value=" <?php echo $product_price ?>">
                </div> 
                <div class="input-group mt-4 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" ><i class="fas fa-globe-americas mr-2"></i>product delivery</span>
                    </div>
                    <input type="text"  class="form-control-plaintext border border-dark" name ="del" id="staticEmail" value=" <?php echo $product_delivery ?>">
                </div> 
                <button type="submit" name = "confirm" class="btn text-center d-flex mx-auto btn-lg" style="background-color:black;color:goldenrod;margin:10px";>Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
