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
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
        //include_once("page/Navbar.php");
        include_once("page/JavaScript.php");
        ?>
        <!-----Header----->
  <!-- Services Start -->
  <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Promotion For April </h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                        <div class="blog-thumb">
                            <img src="img/promotion01.png" class="img-responsive" alt="Blog">
                            </div>
                            <div class="post-format" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Set สุดคุ้ม </h5>
                                <p>ภายในเซตจะมีครบทุกไส้ ทั้ง 12 ไส้ทั้งคาวและไส้หวาน จากราคาปกติ 192 บาท พิเศษเหลือ 179 บาท ส่งฟรีไม่มีคิดเพิ่ม</p>
                                <a href="Products.php" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                            </div>
                        </div>
                        <div class="service-item">
                        <div class="blog-thumb">
                            <img src="img/promotion02.png" class="img-responsive" alt="Blog">
                            </div>
                            <div class="post-format" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">BUY FIVE GIVE ONE</h5>
                                <p>ทุกวันจันทร์และวันพุธ เวลา 13.00-17.00 เมื่อสั่งซื้อ 5 ชิ้น แถมฟรีอีก 1 ชิ้น </p>
                                <a href="Products.php" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                            </div>
                        </div>
                        <div class="service-item">
                        <div class="blog-thumb">
                            <img src="img/promotion03.png" class="img-responsive" alt="Blog">
                            </div>
                            <div class="post-format" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Friday Sale </h5>
                                <p>ทุกวันศุกร์ สั่งซื้อขั้นต่ำ 12 ชิ้น ลดไปเลย 10%  </p>
                                <a href="Products.php" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


        <!-----Footer----->
        <?php
        include_once("page/Footer.php");
        ?>
</body>
 
 
 