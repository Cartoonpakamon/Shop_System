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
        include_once("page/Navbar_admin.php");
        include_once("page/Carousel.php");
        include_once("page/JavaScript.php");
        ?>
        <!-----Header----->
<!---------- From สำหรับ สมัครสมาชิก--------->
<div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="addMember" id="addMember" novalidate="novalidate" action = "member.php" method= "post"> 
                        <div class="control-group">
                            <input type="text" class="form-control" id="fname" name = "fname" placeholder="กรุณากรอกชื่อจริง"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="lname" name = "lname" placeholder="กรุณากรอกนามสกุล"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                            <input type="email" class="form-control" id="email" name = "email" placeholder="Your email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="username" name = "username" placeholder="Your Username"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <input type="password" class="form-control" id="password" name = "password" placeholder="Your password"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendButton" name="sendButton">Send สมัครสมาชิก</button>
                        </div>
                    </form>
                </div>
            </div>

    <!---------------------------------------->






















        <!-----Footer----->
        <?php
        include_once("page/Footer.php");
        ?>
</body>