<?php 
  session_start();
  if(isset($_POST['username'])){
      //Lấy thôgn tin đăng nhập
      $username = $_POST['username'];
      $password = $_POST['password'];
      //So sánh 
      if($username=='admin' && $password=='admin'){
          //Đang nhap thanh cong
          $_SESSION['user']=[
              'username'=>$username
          ];
          header('Location:/cp17/profile/account.php');
      }else{
          //Đang nhap ko thanh cong;
          echo 'Đang nhap ko thanh cong';
      }
  }
?>