<?php
spl_autoload_register(function($className){
   include "classes/$className.php"; 
});

//function demo($name){
//    include "classes/$name.php";
//}
$good = new Good;

$good->test();