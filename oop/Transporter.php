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

    /**
     * Transporter constructor.
     * @param $name
     */
    public function __construct ($name)
    {
        $this->name = $name;
    }


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

    /*Override method - Ghi đè phương thức*/
    public function run ()
    {
        echo "Tôi là ô tô đang chạy";
    }

    static function getClassName ()
    {
        return Car::class;
    }
}

$car = new Transporter("Máy bay");
//$car->name;
$car->run();

$car2 = new Car("Vinfast");
$car2->run();

echo Car::getClassName();

?>