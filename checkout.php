<?php
session_start();
session_destroy();
include_once("connectDB.php");
require_once("cart2.php");
$conndb= new DB_conn;
$con = $conndb->conn;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
        <?php
        include_once("page/Topbar.php");
        include_once("page/Navbar.php");
        include_once("page/Carousel.php");
        include_once("page/JavaScript.php");
        ?>
        <!-----Header----->

 <!-- Checkout Start -->
 <center> <center>
 <div class="container-fluid pt-5">
     
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h1 class="font-weight-semi-bold mb-4">Billing</h1>
                    <div class="row">   
            </div>
            
                <div class="col-lg-10">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <div class="d-flex justify-content-between">
                            <p><?php echo $product_array[$key]["name"]; ?></p>
                            <p><?php echo "$".$product_array[$key]["price"]; ?></p>
                        </div>
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-0 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">$150</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">$160</h5>
                        </div>
                    </div>
                </div>
 
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <a class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" href = thankyou.php>Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
       







    <!-----Footer----->
    <?php
        include_once("page/Footer.php");
        ?>
</body>