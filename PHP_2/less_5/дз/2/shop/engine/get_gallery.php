<?php

include("../config/main.php");
include("../services/Autoloader.php");
spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

$action = $_POST['gallery'];
session_start();
if ($action == "update") {

    $count = $_SESSION['count']++;

    $countNumber = $count * 5;
    $viewRange = "LIMIT $countNumber, 5";

    $db = new \app\services\Db();

    $sql = "SELECT * FROM products JOIN images on products.img_id = images.img_id $viewRange";

    $result = $db->queryAll($sql);

    if ($result) {
        echo json_encode([$result]);
    } else {
        echo json_encode(["status" => 1, "message" => "При отображении товаров произошла ошибка!"]);
    }
}


