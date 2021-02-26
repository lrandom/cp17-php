<?php
include_once 'Human.php';

class Teacher extends Human
{
    public function teach ()
    {
        echo 'I am teaching';
    }
}


$luan = new Teacher("Luan", "đen");
$luan->eat();
$luan->sleep();
$luan->teach();
?>