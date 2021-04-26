<?php

try {
    //kết nối đến CSDL có khả năng xảy ra lỗi
    $conn = new PDO('mysql:host=localhost;dbname=cp17',
        'root',
        'koodinh');
    $conn->exec('SET NAMES utf8');
    //sử dụng vs các lệnh cấu trúc
    echo 'Kết nối thành công';
} catch (PDOException $e) {
    echo 'Kết nối thất bại';
}

//đóng kết nối
//$conn = null;

//execute query insert, chèn 1 bản ghi vào bảng province
$conn->query('INSERT INTO province(name) VALUES ("Quảng Ninh")');
$conn->query('INSERT INTO province(name) VALUES ("Hải Phòng")');


//prepare statement
$stm = $conn->prepare('INSERT INTO province(name) VALUES (:name)');
$stm->bindParam(":name", $name); //bind param để gắn dữ liệu vào placeholder
$name = "tp.Ho Chi Minh";
$stm->execute();//câu lệnh thực thi prepared statement

$name = "Đồng Nai";
$stm->execute();

$name = "Bình Dương";
$stm->execute();

echo $conn->lastInsertId();//id auto increment của lệnh insert cuối cùng
?>