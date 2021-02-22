<?php 

if(isset($_FILES['img'])){

  //01_21
  $currentYear = date('Y');//2021
  $currentMonth = date('m');//01
  $currentDir = $currentMonth.'_'.$currentYear;//01_2021

  if(!file_exists('./uploads/'.$currentDir) ||
     is_file('./uploads/'.$currentDir)
  ){
    //tạo thư mục mới
    mkdir('./uploads/'.$currentDir);
  }

   move_uploaded_file($_FILES['img']['tmp_name'],
    './uploads/'.$currentDir.'/'.time().$_FILES['img']['name']);
  
}

?>