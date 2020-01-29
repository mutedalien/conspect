<?php
// Самый частый
// Сделаем программу расчета депозита в банке
function deposit($money, $srok){ // Сумма вклада и срок
    $stavka = $srok > 3 ? 9 : 8; // Если срок > 3 лет, то ставка 9%. Иначе 8%
    for($i=1;$i<=$srok;$i++){ // Идем по годам ($i)
        $p = $money * $stavka / 100;// Ежегодная прибыль
        $money += $p; // Прибавляем к сумме прибыль
        echo "За $i год Ваша сумма составляет $money (прибыль = $p)<br>";
    }
}

$money = ($_GET['money'] ? (int) ($_GET['money']) : rand(100000,5000000)); 
$srok = ($_GET['srok'] ? (int) ($_GET['srok']) : rand(1,5));
deposit($money,$srok);

// Пример continue в for
for ($i = 1; $i <= 10; $i++){
    if($i < 9)
        continue;
    echo $i; // вернет 9 10
}