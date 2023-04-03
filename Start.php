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
 <!-- About Start -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5"> <br>Curry Everyday</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">ยินดีต้อนรับเข้าสู่ Curry Everyday <br> </h5>
                    <p>Curry Everyday เป็นร้านกะหรี่ปั๊บที่มีรสชาติหลากหลายให้คุณได้เลือกสรรตามที่คุณต้องการ มีรสชาติที่อร่อย มีราคาสินค้าที่ย่อมเยาว์ อีกทั้งมีคุณภาพและมีกระบวนการผลิตที่สดใหม่วันต่อวัน  </p>
                    <p>เด็กทานได้ ผู้ใหญ่ทานดี เป็นขนมว่างที่รับประทานได้ทุกเพศ ทุกวัย ทานได้ทุกที่ทุกเวลา  </p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/currycartoon3.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Products</h4>
                    <p>สินค้าของเราเป็นผลิตภัณฑ์ OTOP จากจังหวัดสระบุรี แป้งกะหรี่ปั๊บกรอบนอก นุ่มใน มีไส้ทั้งหมด 12 ไส้ เช่น
                    ไก่ ถั่ว เผือก บลูเบอรี่ลูกเกด ฝอยทองครีมไข่ สัปปะรด มะพร้าวหอม หมูหยองพริกเผา สัปปะรดลูกเกด ไข่เค็ม
                    องุ่น หมูเห็ดหอม
                    </p>                  
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>ทำสินค้าสดใหม่ทุกวัน</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>โปรโมชั่นลดแลกแจกแถม</h5>
                    
                    <a href="Products.php" class="btn btn-primary mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
        <!-----Footer----->
        <?php
        include_once("page/Footer.php");
        ?>
</body>
 

