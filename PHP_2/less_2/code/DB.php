<?php

class DB{
    static $db;
    
    private function __construct(){
        //Коннект к базе данных
    }
    
    public static function getObject(){
        if(self::$db == null){
            DB::$db = new DB;//делаем объект и присваиваем его полю классса
        }
        return DB::$db;
    }
    
    function select(){
        
    }
     function insert(){
        
    }
     function delete(){
        
    }
     function update(){
        
    }
}

class Test{
    private $obj;
    function __construct(){
        $this->obj = DB::getObject();
    }
    
    function showGoods(){
        $goods = $this->obj->select();
    }
     functiondeleteGoods(){
       $this->obj->delete();
    }
    
}