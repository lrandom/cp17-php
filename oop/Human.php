<?php


class Human
{
    var $name; //tên
    var $eyeColor; /// màu mắt
    var $hairColor; /// màu tóc
    var $height; //chiều cao

    public function __construct ($name, $eyeColor)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
    }

    public function __destruct ()
    {
        // TODO: Implement __destruct() method.
        echo "Huy";
    }


    public function eat ()
    {
        echo 'Im eat';
    }

    public function sleep ()
    {
        echo 'sleep';
    }

    public function learn ()
    {
        echo 'learning';
    }
}

class Teacher extends Human
{
    public function teach ()
    {
        echo 'I am teaching';
    }
}


$thai = new Human("Thái", "đen");
$thai->hairColor = "đen";
$thai->height = "1.8";
$thai->eat();

echo 'Ten human la'.$thai->name;
echo 'Màu mắt là';
echo($thai->eyeColor); //đen

$hieu = new Human("Hiếu", "đen");
$hieu->hairColor = "vang";
$hieu->height = "1.75";
$hieu->sleep();

echo 'Ten human la'.$hieu->name;
echo 'Màu mắt là';
echo($thai->eyeColor);//đen

$luan = new Teacher("Luan", "đen");
$luan->eat();
$luan->sleep();
$luan->teach();