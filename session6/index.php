<?php
//hàm mở kết nối đến mysql
$conn = mysqli_connect("localhost", "root", "koodinh", "cp17");
if (!$conn) {
    echo 'Kết nối thất bại, loi la '.mysqli_connect_error();
    exit();
}

echo 'Kết nối thành công';
//Thuc hien cac lenh de thao tac vs csdl

$query = "INSERT INTO students(full_name,address,phone,age,province_id) 
VALUES('Nam','Ha Noi','08682390',20,1)";
$isDone = mysqli_query($conn, $query);
if ($isDone) {
    echo 'Thêm thành công';
} else {
    echo 'Thêm thất bại'.mysqli_error($conn);
}

//đóng kết nối đến CSDL
mysqli_close($conn);
?>