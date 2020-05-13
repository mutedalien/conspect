<?php
require_once '../config/init.php';
$data = array_slice(scandir('gallery_img/big'), 2);
try {
    $src = [
        'title' => 'Моя галерея',
        'big_img_src' => 'gallery_img/big/',
        'small_img_src' => 'gallery_img/small/',
        'images' => $data
    ];
    $template = $twig->render('index.tmpl', $src);
    echo $template;
} catch (Exception $e) {
    'Error: ' . $e->getMessage();
}