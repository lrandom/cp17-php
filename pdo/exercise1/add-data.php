<?php

//BÀI TẬP
//THÊM MỚI SỬA XOÁ vào bảng users
require_once 'Connect.php';
//nếu có tồn tại dữ liệu
if (isset($_POST['name'])) {
    //lấy dữ liệu ra
    $name = $_POST['name'];
    $address = $_POST['address'];

    //Mở kết nối đến csdl
    //tạo đối tượng connect
    $connect = new Connect();
    //gọi kết nối
    $pdo = $connect->getConnect();

    //$pdo->query('INSERT INTO users(name,address) values("'.$name.'","'.$address.'")');
    $pdo->query("INSERT INTO users(name,address) values('$name','$address')");
}