<?php
 include_once("connectDB.php");
 $conndb= new DB_conn;
 
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
    ?>
        <!-----Header----->
        
 <!---------- From สำหรับ สมัครสมาชิก--------->
 <div class="container py-5 center">
 <div class="row" >
 <table class="table table-bordered text-center mb-0">
 <thead class="bg-secondary text-white">
 <tr>
 <td colspan="7"><h3>ข้อมูล สมาชิก </h3></td>
 </tr>
 <tr>
 <th>ลําดับ</th>
 <th>ชื่อ</th>
 <th>นามสกุล</th>
 <th>email</th>
 <th>username</th>
 <th>แก้ไข</th>
 <th>ลบ</th>
 </tr>
 </thead>
 <tbody class="align-middle">
<?php
    $sql = $conndb-> display_member();
    $i = 1;
    while($data = mysqli_fetch_array($sql)){  
?>
    <tr>
        <td class="align-middle"> <?php echo $i?></td>
        <td class="align-middle"> <?php echo $data['first_name'];?></td>
        <td class="align-middle"> <?php echo $data['last_name'];?></td>
        <td class="align-middle"> <?php echo $data['email'];?></td>
        <td class="align-middle"> <?php echo $data['username'];?></td>
        <td class="align-middle"> <a href="formEdit.php?id=<?php echo $data['member_id']?> " class="btn btn-sm btn-primary">Edit</a></td>
        <td class="align-middle"> <a href="del.php?id=<?php echo $data['member_id']?> " class="btn btn-sm btn-primary" onclick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่')"><i class="fa fa-times"></i></a></td>
    </tr>
    <?php  $i = $i+1; } ?>
    
 </tbody>
 </table>
 </div>
 </div>
 </div>
</body>
        <!-----Footer----->
        <?php
        include_once("page/JavaScript.php");
        ?>

</body>