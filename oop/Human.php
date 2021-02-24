<?php


class Human
{
    var $name; //tên
    var $eyeColor; /// màu mắt
    var $hairColor; /// màu tóc
    var $height; //chiều cao

    public function eat ()
    {
        echo 'Im eat';
    }

    public function sleep ()
    {
        echo 'sleep';
    }

    public function learning ()
    {
        echo 'learning';
    }
}

$thai = new Human();
$thai->name = "Thái";
$thai->eyeColor = "đen";
$thai->hairColor = "đen";
$thai->height = "1.8";

echo 'Ten human la'.$thai->name;
echo 'Màu mắt là';
echo($thai->eyeColor); //đen

$hieu = new Human();
$hieu->name = "Hiếu";
$hieu->eyeColor = "đen";
$hieu->hairColor = "vang";
$hieu->height = "1.75";

echo 'Ten human la'.$hieu->name;
echo 'Màu mắt là';
echo($thai->eyeColor);//đen