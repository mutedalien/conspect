<?php


class Car{
   private $name;
   private $price;


    public function getPrice()
    {
        return $this->price;
    }




    public function getName()
    {
        return $this->name;
    }

   function __construct($name,$price){
       $this->name = $name;
       $this->price = $price;
   }
}