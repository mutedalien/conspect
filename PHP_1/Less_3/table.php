<?php
// Таблица Пифагора (умножения)
// Строки умножаются на столбцы
$table = "<table border='1' width=800>";
$str = 1; //счетчик строк
while($str <= 100){ // Пока строк меньше 100
    $table .= "<tr>"; // Приклеиваем к table строчку
    $td = 1; // Счетчик столбцов
    // Далее цикл внутри цикла
    while($td <= 10){ // Пока строк меньше 10
        $x = $td * $str; // Выполняем вычисление (№ стр * № столб)
        $table .= "<td>$x</td>"; // Приклеиваем результат вычисления
        $td++; 
    }
    $str++
    $table .= "</tr>"; 
}
$table .= "</table>"; // Закрываем таблицу
echo $table;

// Добавим стили (нечетные - синие, четные - красные)
$table = "<table border='1' width=800>";
$str = 1; 
while($str <= 100){
    // Если надо только 4 строчки
    //if($str == 5) {
    //  break;    
    //}
    $table .= "<tr>"; 
    $td = 1; 
    
    while($td <= 10){ 
        if($td % 2 == 0);
            $style = "style = 'color:red;'";
    }
        else{
            $style = "style = 'color:blue;'";
    }
        $x = $td * $str; 
        $table .= "<td $style>$x</td>"; 
        $td++; 
    }
    $str++
    $table .= "</tr>"; 
}
$table .= "</table>"; 
echo $table;

// Добавляем continue
$table = "<table border='1' width=800>";
$str = 1; 
while($str <= 100){
    // Если надо только 4 строчки
    //if($str == 5) {
    //  $td++; // Переносим строку 70, т.к. иначе будет зацикл.
    //  continue;
    //}
    $table .= "<tr>"; 
    $td = 1; 
    
    while($td <= 10){ 
        if($td % 2 == 0);
            $style = "style = 'color:red;'";
    }
        else{
            $style = "style = 'color:blue;'";
    }
        $x = $td * $str; 
        $table .= "<td $style>$x</td>"; 
        $td++; 
    }
    $str++
    $table .= "</tr>"; 
}
$table .= "</table>"; 
echo $table;