<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello World
    <?php 
       $myName = "Luan";
       $myAge = 29; //đn biến
       define("SCHOOL_NAME","NIIT"); //đn hằng
    ?>

    <i><?php echo $myName; ?></i> <!--Luan-->
    <i><?php echo $myAge; ?></i> <!--29-->
    <i><?php echo SCHOOL_NAME; ?></i>

    <?php 
    $myAge = 29;
    if($myAge>18){
        echo "Bạn đã đủ tuổi";
    }

    if($myAge<30){
       echo "Bạn còn trẻ";
    }else{
       echo "Bạn già quá";
    }

    if($myAge<30){
        echo "Bạn còn trẻ";
    }else if($myAge >30){
        echo "Bạn già quá";
    }else if($myAge>18 && $myAge<20){
        echo "Ko biết nói gì";
    }

    $num = 10;
    switch ($num) {
        case 1:
            echo 'Gia tri 1';
            break;
        
        case 2:
            echo 'Gia tri 2';
            break;
        default:
            echo 'Nothing';
            break;
    }
    ?>
</body>
</html>

