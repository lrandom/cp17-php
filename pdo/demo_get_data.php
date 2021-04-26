<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once 'conn.php'; //đưa lớp conn
$conn = new Conn();
$pdo = $conn->getConnect();

$select = $pdo->query('SELECT * from province');
//$select->setFetchMode(PDO::FETCH_OBJ);//lấy về dữ liệu dưới dạng mạng liên hợp
while ($row = $select->fetchObject()) {
    /*  echo $row['id'];
      echo $row['name'];*/
    echo $row->id;
    echo $row->name;
    echo '<br>';
}

?>
</body>
</html>
