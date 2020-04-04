<?php
include "Car.class.php";

class RaceCar extends Car{
    private $speed;
   
    
    function __construct($title,$price,$speed){
        parent::__construct($title,$price);
        $this->speed = $speed;
    }
    
    function drive(){
        parent::drive();
        echo "Автомобиль ".$this->getTitle()." разгоняется до скорости ".$this->speed;
        $this->show();
    }
    
   /* function setter($title,$price){
        $this->title = $title;
        $this->price = $price;
    }*/
}

$rc1 = new RaceCar("Ferrari",5000,500);
$rc1->drive();