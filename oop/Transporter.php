<?php

//Phuong tien van tai
//Che giau du lieu
//public: mặc định, truy cập ở mọi nơi
//private: truy cập trong cùng lớp
//protected: truy cập ở lớp con
class Transporter
{
    private $name;
    protected $material;

    public function run ()
    {
        echo $this->name.' running';
    }
}

class Car extends Transporter
{
    public function getMaterial ()
    {
        echo $this->material;
    }
}

$car = new Transporter();
//$car->name;
$car->run();
?>