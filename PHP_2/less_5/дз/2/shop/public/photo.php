<?php
require_once('../config/main.php');
include("../services/Autoloader.php");
spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

include '../templates/Twig/Autoloader.php';
Twig_Autoloader::register();

$id = $_GET['id'];
$db = new \app\services\Db();
$db->execute("UPDATE products SET view_count = view_count + 1 WHERE id = $id");
$product = $db->queryOne("SELECT * FROM products WHERE id = $id");
$img = $db->queryOne("SELECT * FROM images WHERE img_id = {$product['img_id']}");
$src = $img['main_dir'] . "/" . $img['main_name'];
$count = $product['view_count'];
$product_name = $product['product_name'];
$description = $product['description'];
$price = $product['price'];

try {
    $loader = new Twig_Loader_Filesystem('../templates/templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('product_page.tmpl');
    echo $template->render(array(
        'src' => $src,
        'price' => $price,
        'count' => $count,
        'name' => $product_name,
        'description' => $description
    ));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}



