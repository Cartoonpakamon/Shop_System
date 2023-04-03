<?php
session_start();
include_once("connectDB.php");
$conndb = new DB_conn;
$con = $conndb->conn;

$error = array();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username)){
        echo "<script>alert('Please enter username.')</script>";
        echo "<script>window.location.href='loginnew.php' </script>";
    }
    if(empty($password)){
        echo "<script>alert('Please enter password.')</script>";
        echo "<script>window.location.href='loginnew.php' </script>";
    }
    if(count($error) == 0){
        $sql = $conndb->check_login($username,$password);

        if(mysqli_num_rows($sql) == 1){
            $data = mysqli_fetch_array($sql);
            $_SESSION['name'] = $data['first_name'];
            if ($_SESSION['name'] == 'Admin001'){
                echo "<script>alert('You login successfully')</script>";
            echo "<script>window.location.href='add_product.php' </script>";
            }else{
                echo "<script>alert('You login successfully')</script>";
                echo "<script>window.location.href='component.php' </script>";
            }
        }else{
            echo "<script>alert('Your username or password incorrect.')</script>";
            echo "<script>window.location.href='loginnew.php' </script>";
        }
}
}
?>