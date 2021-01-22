<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//Kiểm tra có sesion user hay ko
    if(isset($_SESSION['user'])){
        //In ra lời chào và thẻ đăng xuất
        echo 'Xin chao '.$_SESSION['user']['username'];
        echo '<a href="/cp17/profile/logout.php">Đăng xuất</a>';
    }
?>


</body>
</html>