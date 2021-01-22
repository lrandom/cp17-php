<?php session_start();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    header('Location:/cp17/profile/login.php');
}
?>