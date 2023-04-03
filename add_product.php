<?php
ini_set('file_uploads', '1');
 include_once("connectDB.php");
 $conn = new DB_conn;
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
        include_once("page/Navbar_admin.php");
        include_once("page/JavaScript.php");
        ?>
        <!-----Header----->
        <div class="container "  >
        <center>
<h3 class="mt-5">Add Product</h3>
<div class="col-sm-4 col-sm-offset-1 ">
<form action = "insert_product.php" method="POST" enctype="multipart/form-data">
<div class="mb-3 text-left">
<label class="form-label">ชื่อสินค้า:</label>
<input type="text" class="form-control" id="name" name="name">
</div>
<div class="mb-3 text-left">
<label class="form-label">ราคา: </label>
<input type="text" class="form-control" id="price" name="price">
</div>
<div class="mb-3 text-left">
<label class="form-label">รูปภาพสินค้า</label>
<input type="file" class="form-control" id="picture" name="picture">
</div>
<div class="mb-3 text-left">
<label class="form-label">เลือกประเภทสินค้า</label>
<select class = "form-control" name="category" id="category">
<option value=" "> <--กรุณาเลือกประเภท -- </option>
<?php
    $sql=  $conn->select_category();
    while($data= mysqli_fetch_array($sql)){
        ?>
        <option value="<?php echo $data['c_id'];?>"><?php echo $data['C_name'];?></option>
        <?php
    }
    ?>
    </select>

</div>
<button type="submit"class="btn btn-primary"id="submit"name="submit">บันทึกข้อมูลสินค้า</button>
                    </form>
                </div>

        <!-----Footer----->
</body>