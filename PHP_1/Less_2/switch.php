<?php

// Простой вариант
$svetophor = "red";

switch($svetophor){
    case "red": // Случай
        echo "Стоп";
        break; // В случае выполнения условия - прерывает свитч
    case "green":
        echo "Вперед";
        break;
    case "yellow":
        echo "Внимание";
        break;
    default:
        echo "Поломка";
}

// Вариант с массивом
$svetophor = ["red","yellow","green"]; // Набор значений одного типа (индексация с 0)
$color = $svetophor[rand(0,2)]; // Рандомное знач индекса массива

switch($color){
    case "red":
        echo "Стоп";
        break;
    case "green":
        echo "Вперед";
        break;
    case "yellow":
        echo "Внимание";
        break;
    default:
        echo "Поломка";
}
