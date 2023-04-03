<?php

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','projectfinal');

class DB_conn{
    function __construct(){
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
        //checkout connection_aborted
    if($conn === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
        }
    else{
        echo "";
        }
        $this->conn = $conn;
    }
    function insert_member($fname,$lname,$email,$username,$password){
        $sql = "insert into member(first_name,last_name,email,username,password)
        values ('$fname','$lname','$email','$username','$password')";
        return ($sql);
    }
    function check_login($username,$password){
        $str = mysqli_query($this->conn,"SELECT member_id, first_name , last_name from member WHERE username = '$username' and password = '$password'");
        return $str;
    }

    function select_category(){
        $strSQL= "SELECT*FROM category ORDER BY C_name ASC";
        $str= mysqli_query($this->conn, $strSQL);
        return $str;
    }

    public  function insert_product($p_name,$p_price,$path_img,$p_category){
        $strSQL= "INSERT INTO product (pname,pprice,pimage,c_id)
        values('$p_name',$p_price,'$path_img',$p_category)"; 
        $str= mysqli_query($this->conn,$strSQL); 
        return $str;}
    
    function select_all_product(){
        $sql = mysqli_query($this->conn,"SELECT * from product ");
        return $sql;
    }

    public function display_member(){
        $str = mysqli_query($this->conn,"SELECT * from member");
        return $str;
        }
    public function display_member_edit($id){
        $str = mysqli_query($this->conn,"SELECT * from member where member_id = $id");
        return $str;
        }
    public function edit_member($fname, $lastname,$email,$id ){
        $str = mysqli_query($this->conn,"UPDATE member SET first_name = '$fname', last_name ='$lastname', email = '$email' WHERE member_id = $id ");
        return $str;
        }
    public function del_member($id) {
            $str = mysqli_query($this->conn,"DELETE FROM member WHERE member_id = $id ");
            return $str;
            }
    public function display_member_del($id){
            $str = mysqli_query($this->conn,"SELECT * from member where member_id = $id");
            return $str;
            }
}

?>