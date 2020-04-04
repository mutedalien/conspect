<?php
require_once '/vendor/autoload.php';
Twig_Autoloader::register();

// подключение к бд
require_once 'db_connect.php';

$con = new Connection(); 
$data = $con->getRows25();

if (!isset($_GET['page'])) {
  $page = 2;
}
else {
  $page = ++$_GET['page'];
}


  $loader = new Twig_Loader_Filesystem('templates');
  
  $twig = new Twig_Environment($loader);
  
  $template = $twig->loadTemplate('catalog.tmpl');

  echo $template->render(array (
    'data' => $data,
    'page' => $page 

  )); 

?>