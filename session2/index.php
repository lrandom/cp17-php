<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //vi du lenh for i
    for ($i=0; $i < 10; $i++) { 
       echo "<i>".$i."</i><br>";
    }

    echo 'Vòng lặp do while';
    //thuc hien lenh trưoc, kiem tra dk sau
    $index = 0;
    do {
        echo "<i>".$index."</i><br>";
        $index+=1;
    } while ($index <= 10);

    echo 'Vòng lặp while do';
    //kiem tra dk trc, thuc hien lenh sau
    $index = 0;
    while ($index <= 10) {
       echo "<i>".$index."</i><br>";
       $index++;
    }

    echo 'Vòng lặp foreach<br>';
    $mang = [1,2,3,4,5];

    for ($i=0; $i < count($mang) ; $i++) { 
       echo $mang[$i];
    }

    foreach ($mang as $v) {
       echo $v;
    }

    $numericIndexArray = [2,1,2,3,4,6];
    echo $numericIndexArray[5];//6
    $assocArray = [
        "name"=>"Luan",
        "age"=>29
    ];
    echo $assocArray["name"]; //Luan
    echo $assocArray["age"];//29

    $arr2D = [
        [1,2,3,4,5],
        [6,7,8,9,10]
    ];

    $arr3D =[
        [
            [
                1,2,3,4,5,6,7
            ],
            [
                2,3,4,5,6,8,9
            ]
        ],
        [
            [
                1,2,3,4,5,6,7
            ],
            [
                2,3,4,5,6,8,9
            ]
        ]   
            ];

            foreach ($arr3D as $item1) {
               foreach ($item1 as $item2) {
                   foreach ($item2 as $item3) {
                       echo $item3;
                   }
               }
            }

    $arrAssoc2D = [
      [
          "name"=>"Luan",
          "age"=>29
      ],
      [
          "name"=>"Nam",
          "age"=>29
      ],
      [0,1,2,3,4,5,6]
      ];

    foreach ($arrAssoc2D as $item) {
       foreach ($item as $k => $v) {
          echo $v;
       }
    }

    $mang = [
        [2,3,4,5,6,7,8],
        [6,7,8,9,10,9,10],
        [3,4,5,6,7,8,9,9,90]
    ];

    //a, Duyệt mảng và in vào thẻ ul-li
    //b, Duyệt mảng và tìm số nguyên tố sau đó in ra màn hình 
    foreach ($mang as $row){
      echo '<ul>';
        foreach ($row as $col){
            echo '<li>';
            echo $col;
            echo '</li>';
        }
      echo '</ul>';
    }

    foreach ($mang as $row){
        foreach ($row as $num){
            $flag = true;
            for ($i=2; $i < $num; $i++) { 
                if($num%$i==0){
                    $flag =false;
                    break;
                }
            }
            if($flag==false){
                echo '<div>'.$num.'khong phai so NT</div>';
            }else{
                echo '<div>'.$num.'la so NT</div>';
            }
        }
        echo '<br>';
    }
    
    ?>
</body>
</html>