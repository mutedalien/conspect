<?php
// Находим сумму чисел кратных 3 от 1 до 100
$i = 1;
$sum = 0;

while($i <= 100) {
    if($i % 3 == 0) { // остаток от деления (7 % 10 = 3)
        $sum += $i; // Тоже самое, что и $sum = $sum + $i
    }
    $i++;
}
echo $sum;