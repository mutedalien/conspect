<?php
$path = "files/test.html"; // Присваем переменной относительный путь к проекту
//$path = $_SERVER['DOCUMENT_ROOT']."/files/test.html"; // Абсолютный путь. Берет начало в глобалном массиве $_SERVER

$file = fopen($path,"r");
while(!feof($file)){
    echo fgets($file)."<br>";
}
//echo file_get_contents($path); 
