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
        include_once("page/Navbar.php");
        include_once("page/JavaScript.php");
        ?>
        <!-----Header----->

        


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Top 3 bestseller </h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/ไก่.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">ไส้ไก่</h5>
                                <p>เป็นไส้ที่ได้รับความนิยมเป็นอันดับ 1 ของทางร้าน เพราะไก่ของทางร้านมีส่วนผสมที่เข้าถึงรสชาติ</p>
                                <a href="Products.php" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/สับปะรด.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">ไส้สับปะรด</h5>
                                <p>เป็นไส้ที่ได้รับความนิยมเป็นอันดับ 2 ของทางร้าน เพราะเป็นสับปะรดนำเข้ามาจากต่างประเทศ</p>
                                <a href="Products.php" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/พริกเผา.png" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">ไส้หมูหยองพริกเผา</h5>
                                <p>เป็นไส้ที่ได้รับความนิยมเป็นอันดับ 3 ของทางร้าน เพราะมีความกลมกล่อมของหมูหยองและพริกเผาที่ลงตัว</p>
                                <a href="Products.php" class="border-bottom border-secondary text-decoration-none text-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</body>
