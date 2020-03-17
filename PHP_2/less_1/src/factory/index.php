<?php
include "Factory.php";

$count = rand(5,20);
$carName = ["Audi","VW","Skoda"];

$factory = new Factory();
$cars = [];//массив объектов класса Car

$sum = 0;
for($i=0;$i<$count;$i++){
    $cars[$i] = $factory->createCar($carName[rand(0,count($carName)-1)]);
    $price = $cars[$i]->getPrice();
    echo "Автомобиль ".$cars[$i]->getName()." стоит ".$price."<br>";
    $sum += $price;
}
echo "Общая стоимость всех авто = $sum";