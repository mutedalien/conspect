<?php

// В ассоциативнном массиве вместо индекса используется ключ (строка)
$cars = ["Audi" => 1000, "BMW" => 1200, "VW" => 900]; // Ключ(название) => Значение(цена)
print_r($cars);

// Для обхода ассоц массива for уже не подходит. Используем foreach 
foreach($cars as $value){
    echo $value."<br>"; // Выводит только цену
}
foreach($cars as $title => $price){
    echo "Автомобиль $title стоит $price<br>"; // Выводит название с ценой
}
foreach($cars as $title => $price){
    if($title == "Audi"){
         echo "Автомобиль $title стоит <span style='color:red;'>$price</span><br>";
    }
    else
        echo "Автомобиль $title стоит $price<br>";
}
?>


<?php

// Массивы массивов
$cars = ["Audi" => ["price"=>[1000,1200],"color"=>"white","year"=>2020], // Вложенные массивы
         "BMW" => ["price"=>1100,"color"=>"black","year"=>2019] 
        ];
print_r($cars);

foreach($cars as $key => $value){ // Ключи - это марки, а value - свойства
    if(is_array($value['price'])){ // is_array - функция проверки на массив
        $p = implode("-",$value['price']); // Если значение - массив, то преобразуем в строку ("-" дефис между ценами)
    }
    else{
        $p = $value['price'];
    }
    echo "$key стоит ".$p.",цвет:".$value['color']."<br>";
}

?>





