﻿<?php
include_once('inc/C_Page.php');
$controller = new C_Page();
$controller->action_about();//готовим переменные для мэйн
$controller->render();   //Вывод представления мэйн

