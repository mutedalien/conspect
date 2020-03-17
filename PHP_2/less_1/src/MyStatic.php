<?php

class MyStatic {
    static $x;
    
    //$this использовать в static методах запрещено!!!
    static function demo($y){
        MyStatic::$x = $y;
        //$obj = new MyStatic;
        //$obj->usually();
        //self::$x = $y;
    }
    
    function usually(){
        echo "test";
        MyStatic::demo(1);
    }
    
}

MyStatic::demo(5);
echo MyStatic::$x;