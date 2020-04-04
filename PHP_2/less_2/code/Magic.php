<?php

class Magic{
    private $name;
    
    public function __autoload($nameClass){
        include "classes/$nameClass.php";
    }
    
    function test(){
        echo $this->name;
    }
    
    public function __get(){
        die("Вы обратились к несуществующему полю класса");
    }
    
    public function __set($x,$value){
        $this->name = $value;
    }
    
    public function __call($nameMeth,$params=[]){
        die("Вы обратились к несуществующему метод");
    }
    
}

$obj = new Magic;
echo $obj->x;//обращаемся к несуществующему полю
$obj->test = "123";//обращаемся к несущесвующему полю и присваиваем значение
$obj->f(1,2,3);

$demo = new Demo;