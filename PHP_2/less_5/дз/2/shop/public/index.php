<?php


include("../config/main.php");
include("../services/Autoloader.php");
spl_autoload_register([new \app\services\Autoloader(), 'loadClass']);

include '../templates/Twig/Autoloader.php';
Twig_Autoloader::register();

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['count']++;
} else if(!$_SESSION['count']) {
    $_SESSION['count']=1;
}

$count = $_SESSION['count'];

$goodNumber = $count * 5;
$viewRange = "LIMIT $goodNumber";

$db = new \app\services\Db();

$sql = "SELECT * FROM products JOIN images on products.img_id = images.img_id $viewRange";

$result = $db->queryAll($sql);
$gallery = $result;

try {
    $loader = new Twig_Loader_Filesystem('../templates/templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('gallery.tmpl');
    echo $template->render(array(
        'gallery' => $gallery));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}

