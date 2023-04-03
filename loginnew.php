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
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
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
<section id = from>
<center>
<div class="col-sm-4 col-sm-offset-1 ">
    <div class="login-form">
<h3 class="mt-5">LOGIN</h3>
<form action="check_login.php" method="post">
    <div class="mb-2 text-left">
<label for="username" class="form-label">UserName:</label>
<input type="text" class="form-control" id="username" name="username">
</div>
<div class="mb-3  text-left" ">
<label for="password" class="form-label">Password:</label>
<input type="password" class="form-control" id="password" name="password">
</div>
<!--
    <input type="username"  placeholder="Username"id="username" name="username">
    <p class="help-block text-danger"></p>
    <input type="password"  placeholder="Password"id="password" name="password">
-->
<button type="submit" class="btn btn-primary" id="submit" name="submit">เข้าสู่ระบบ</button>
<a href ="addmember.php" class="ca">Create an account</a>

</form>
</div>
</div>
            </div>
</section>
        <!-----Footer----->
        <?php
        include_once("page/Footer.php");
        ?>
</body>