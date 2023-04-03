<?php
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
<?php $sql = $conn->display_member_del($_GET['id']);
    while($data = mysqli_fetch_array($sql)){
  $f_name = $data['first_name'];
  $l_name = $data['last_name'];
  $e_mail = $data['email'];
  $u_name = $data['username'];

}
?>
   <div class="container">
   <h3 class="mt-5">แก้ไขข้อมูลสมาชิก</h3>
   <form method="POST">
   <div class="mb-3">
   <label for="fname" class="form-label">ชื่อ:</label>
   <input type="text" class="form-control" id="fname" name="fname" value= <?php echo $f_name ?> >
   </div>
   <div class="mb-3">
   <label for="lname" class="form-label">นามสกุล:</label>
   <input type="text" class="form-control" id="lname" name="lname" value=<?php echo $l_name?>>
   </div>
   <div class="mb-3">
   <label for="email" class="form-label">email:</label>
   <input type="email" class="form-control" id="email" name="email" value= <?php echo $e_mail; ?>>
   </div>
   <div class="mb-3">
   <label for="username" class="form-label">User Name:</label>
   <input type="text" class="form-control" id="uname" name="uname" disabled value= <?php echo $u_name; ?> >
   </div> <div class="mb-3">
   <button type="submit" class="btn btn-primary" id="edit" name="edit">บันทึกการเปลียนแปลง </button>
   </form>
   </div>
 <?php
 $id = $_GET['id'];
 $sql = $conn->del_member($id);
    echo $sql;
 if($sql){
    echo "<script>alert('ลบข้อมูลสําเร็จ')</script>";
    echo "<script>window.location.href='display_member.php'</script>";
 } else {
    echo "<script>alert('เกิดข้อผิดพลาด')</script>"; 
 }
 
 ?>



</body>
        <!-----Footer----->
        <?php
        include_once("page/Footer.php");
        include_once("page/JavaScript.php");
        ?>

</body>