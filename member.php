<?php
include_once("ConnectDB.php");
$conndb = new DB_conn; //สร้าง object ชื่อ $conndb
$con = $conndb->conn; // การเข้าถึงตัวแปรใน class ตั้งชื่อเป็น $con

#---------- ทำการรับค่าจากหน้าสมาชิก---------
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$error = array();
if(isset($_POST['sendButton'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($fname)){
        echo "<script>alert('Please enter First Name.')</script>";
        echo "<script>window.location.href='addmember.php' </script>";
        $check_member = 1 ;
    }
    if(empty($lname)){
        echo "<script>alert('Please enter Last Name.')</script>";
        echo "<script>window.location.href='addmember.php' </script>";
        $check_member = 1 ;
    }
    if(empty($email)){
        echo "<script>alert('Please enter Email.')</script>";
        echo "<script>window.location.href='addmember.php' </script>";
        $check_member = 1 ;
    }
    if(empty($username)){
        echo "<script>alert('Please enter Username.')</script>";
        echo "<script>window.location.href='addmember.php' </script>";
        $check_member = 1 ;
    }
    if(empty($password)){
        echo "<script>alert('Please enter Password.')</script>";
        echo "<script>window.location.href='addmember.php' </script>";
        $check_member = 1 ;
    }
    if ($check_member = 1){
        exit;
    }
    if($check_member = 0 ){
        echo $fname,$lname,$email,$username,$password;

$sql = $conndb->insert_member($fname,$lname,$email,$username,$password);

if(mysqli_query($con,$sql)){
 printf("%d Row insert.\n", mysqli_affected_rows($con));
}

if($sql){
    echo "<script>alert('สมัครสมาชิกสำเร็จ')</script>";
    echo "<script>window.location.href='loginnew.php' </script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาด')</script>";
        echo "<script>window.location.href='register.php' </script>";
    }
mysqli_close($con);
    }


}

?>