<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $arr = [
      6,1,2,44,5,6,7,8,9,2
  ];
  //1,2,2,5,6,6,7,8,9,44
  for ($i=0; $i < count($arr)-1; $i++) { 
     for ($j=$i+1; $j < count($arr); $j++) { 
         if($arr[$i]>$arr[$j]){
             //swap đổi chỗ
             $tmp = $arr[$i];
             $arr[$i] = $arr[$j];
             $arr[$j] = $tmp;
         }
     }
  }

  for ($i=0; $i < count($arr); $i++) { 
      echo $arr[$i].'<br>';
  }
  
?>
</body>
</html>
