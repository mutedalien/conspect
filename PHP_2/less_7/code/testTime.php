<?php
$arr = [];

const LENGTH = 5000000;

for($i=0;$i<LENGTH;$i++){
    $arr[$i] = "test$i";
}
$start = microtime(true);
foreach ($arr as $value){
    $temp = $value;
}
echo "Время обхода массива составило ".(microtime(true) - $start)."<hr>";
echo "Памяти на скрипт было израсходовано ".memory_get_usage();
