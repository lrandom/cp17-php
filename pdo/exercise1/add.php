<?php
require_once 'Connect.php';
$connect = new Connect();
$pdo = $connect->getConnect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

///CÁCH THÔNG THƯỜNG
$name = "Luân";
$address = "Quảng Ninh";
try {
    $sql = "INSERT INTO  users(name,address) VALUES ('$name','$address')";
    $pdo->query($sql);//chèn dữ liệu
} catch (Exception $e) {
    echo $e->getMessage();
}

///CÁCH DÙNG PREPARED STATMENT
$stm = $pdo->prepare("INSERT INTO users(name,address) VALUES (:name,:address)");
$stm->bindParam(':name', $name);
$stm->bindParam(':address', $address);
$name = "Nam";
$address = "Hà Nội";
$stm->execute();

$sql = 'SELECT * from users';
$rs = $pdo->query($sql);
while ($row = $rs->fetchObject()) {
    echo $row->id.$row->name.$row->address."\n";
}
?>