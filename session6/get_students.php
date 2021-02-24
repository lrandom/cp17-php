<?php
//hàm mở kết nối đến mysql
$conn = mysqli_connect("localhost", "root", "koodinh", "cp17");
if (!$conn) {
    echo 'Kết nối thất bại, loi la '.mysqli_connect_error();
    exit();
}

echo 'Kết nối thành công';
//Thuc hien cac lenh de thao tac vs csdl
mysqli_query($conn, 'SET NAMES utf8');
$query = "SELECT * FROM students";
$resultSet = mysqli_query($conn, $query);
echo '<br>';
if (mysqli_num_rows($resultSet) > 0) {
    while ($row = mysqli_fetch_assoc($resultSet)) {
        echo $row['id'].'-'.$row['full_name'].'-'.$row['address'].'-'.$row['phone'].'-'.$row['age'].'-'.$row['province_id'];
        echo '<br>';
    }
}

//đóng kết nối đến CSDL
mysqli_close($conn);
?>

