<?php
include_once('inc/C_Page.php');
$controller = new C_Page();
$controller->action_service();//готовим переменные для мэйн
$controller->render();   //Вывод представления мэйн

