<?php
$x = 10;
try{
    $y = $x / rand(0,5);
}
catch (Exception $e){
    echo $e->getMessage();
}


echo "hello world";