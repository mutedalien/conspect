<?php

include "admin/Template.php";
include "site/Template.php";

use \site\template as test;//импортировали пространство имен и 
//присвоили псевдоним пространству имен

$obj = new test\Template;
$obj->showPage();