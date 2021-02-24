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
$query = "UPDATE students SET full_name='Thai' WHERE id=4";
$isDone = mysqli_query($conn, $query);
echo '<br>';
if ($isDone == true) {
    echo "Update thành công";
} else {
    echo "Update thất bại";
}

//crud = create - read - update -delete

//đóng kết nối đến CSDL
mysqli_close($conn);
?>

