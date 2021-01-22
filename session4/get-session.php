<?php
session_start();
if($_SESSION['user']){
    $user = $_SESSION['user'];
    echo $user['id'];
    echo $user['name'];
}
?>