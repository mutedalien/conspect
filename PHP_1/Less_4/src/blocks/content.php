<?php
$path = "files/test.html"; // Присваем переменной абсолютный путь к проекту
//$path = $_SERVER['DOCUMENT_ROOT']."/files/test.html"; // Относительный путь. Берет начало в глобалном массиве $_SERVER

$file = fopen($path,"r");
while(!feof($file)){
    echo fgets($file)."<br>";
}
//echo file_get_contents($path); 