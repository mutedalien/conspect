<?php
include "Outer.php";

class Car{
    private $title;
    private $price;
    
    function __construct($title,$price){
        $this->title = $title;
        $this->price = $price;
        //$this->drive();
    }
    
     public function getPrice(){
        return $this->price;
    }
    
    public function getTitle(){
        return $this->title;
    }
    function drive(){
        echo "Автомобиль ".$this->title." стоит ".$this->price."<br>";
        $obj = new Outer;
        $obj->test();
    }
    
   protected function show(){
        echo "Demo Base";
    }
    
   /* function setter($title,$price){
        $this->title = $title;
        $this->price = $price;
    }*/
}

/*$car1 = new Car("Audi",1000);
//$car1->setter("Audi",1000);


$car2 = new Car("BMW",1200);
//$car2->setter("BMW",1200);

$car3 = new Car("VW",800);
//$car3->setter("VW",800);
*/
/*
$arr = [$car1,$car2,$car3];
foreach($arr as $car){
    $car->drive();
}*/