<?php
class M_UserNavigation extends M_Base {

	function getUserNav($id) {
		$origin = "usernav.log"; //куда пишем логи
		$col_zap = 1000; //строк в файле не более

		$user = $_SESSION['user_id'];
		$date = date("H:i:s d.m.Y"); //дата события
		$home = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; //какая страница сайта
		$lines = file($origin);
		while (count($lines) > $col_zap) {
			array_shift($lines);
		}

		$lines[] = $user . "|" . $date . "|" . $home . "|\r\n";
		file_put_contents($origin, $lines);

		$file = file('usernav.log');
		$lastActions = [];
		foreach ($file as $key => $value) {
			$lineArr = explode('|', $value);
			if ($lineArr[0] == $id) {
				$currentAction = [
					'user' => $lineArr[0],
					'date' => $lineArr[1],
					'action' => $lineArr[2],
				];
				array_push($lastActions, $currentAction);
			}
		}
		return $lastActions;
	}
}
