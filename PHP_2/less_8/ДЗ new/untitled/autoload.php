<?php

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

spl_autoload_register("gbStandardAutoload");

function gbStandardAutoload($className) {
	$dirs = [
		'c',
		'm',
		'v',
	];
	$found = false;
	foreach ($dirs as $dir) {
		$fileName = __DIR__ . '/' . $dir . '/' . $className . '.php';
		if (is_file($fileName)) {

			require_once $fileName;
			$found = true;
		}
	}

	if (!$found) {
		throw new Exception('Unable to load ' . $className);
	}
	return true;
}

//$object = new Test;
