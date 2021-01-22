<?php session_start();

//Kiểm tra session có tồn tại hay ko
if(isset($_SESSION['user'])){
    //Xoá session
    unset($_SESSION['user']);
    //Chuyển người dùng về trang login
    header('Location:/cp17/profile/login.php');
}
?>