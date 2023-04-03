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

        <!-- Header Start -->
        <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Gallery</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Gallery</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
        
    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">สินค้า OTOP จากสระบุรี <br>กะหรี่ปั๊บ<br></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">ทั้งหมด</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">ไส้หวาน</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">ไส้คาว</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้ไก่.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้ไก่.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้ถั่ว.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้ถั่ว.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้บลูเบอรี่ลูกเกด.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้บลูเบอรี่ลูกเกด.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้เผือก.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้เผือก.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้ฝอยทองครีมไข่.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้ฝอยทองครีมไข่.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้มะพร้าวหอม.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้มะพร้าวหอม.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้สัปปะรด.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้สัปปะรด.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้หมูหยองพริกเผา.png" alt="">
                        <a class="portfolio-btn" href="img/ไส้หมูหยองพริกเผา.png" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้องุ่น.jpg" alt="">
                        <a class="portfolio-btn" href="img/ไส้องุ่น.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้สัปปะรดลูกเกด.jpg" alt="">
                        <a class="portfolio-btn" href="img/ไส้สัปปะรดลูกเกด.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้หมูเห็ดหอม.jpg" alt="">
                        <a class="portfolio-btn" href="img/ไส้หมูเห็ดหอม.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/ไส้ไข่เค็ม.jpg" alt="">
                        <a class="portfolio-btn" href="img/ไส้ไข่เค็ม.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

        <!-----Footer----->
        <?php
        include_once("page/Footer.php");
        ?>
</body> 


