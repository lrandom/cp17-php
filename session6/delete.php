<?php
//hàm mở kết nối đến mysql
$conn = mysqli_connect("localhost", "root", "koodinh", "cp17");
if (!$conn) {
    echo 'Kết nối thất bại, lỗi là '.mysqli_connect_error();
    exit();
}

echo 'Kết nối thành công';
//Thuc hien cac lenh de thao tac vs csdl
mysqli_query($conn, 'SET NAMES utf8');
$query = "DELETE FROM students WHERE id=3";
$isDone = mysqli_query($conn, $query);
echo '<br>';
if ($isDone == true) {
    echo "Xoá thành công";
} else {
    echo "Xoá thất bại";
}

//đóng kết nối đến CSDL
mysqli_close($conn);
?>

