<?php

class M_User extends M_Base {
	public function authStatus() {

		$login = '';
		$password = '';
		$status = '';
		$user = '';

		if (isset($_POST['login']) &&
			isset($_POST['password'])) {
			$login = safe($_POST['login']);
			$password = safe($_POST['password']);

			$user = getUser($login); // array

			if ($user) {
				if (password_verify($password, $user['user_pass'])) {
					$_SESSION['isAuth'] = true;
					$_SESSION['user_name'] = $user['user_name'];
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['user_login'] = $user['user_login'];
					//если установлена галочка "запомнить пароль" - помещаем login и пароль в куки на 2 месяца
					if ($_POST['remember_pass']) {
						setcookie('login', $login, time() + 5184000);
						setcookie('password', $password, time() + 5184000);
					}

					session_write_close();
					header('location: /index.php');
					die;
				} else {
					$status = "Пароль не верный";
					$_SESSION['isAuth'] = false;
					$_SESSION['user_name'] = 'Гость';
				}
				$user = $user['user_name'];
			} else {
				$status = "Такого пользователя не существует";
				$_SESSION['isAuth'] = false;
				$_SESSION['user_name'] = 'Гость';
			}
		}

		return ['status' => $status, 'isAuth' => $_SESSION['isAuth']];
	}

	public function registerStatus() {
		$name = '';
		$login = '';
		$password = '';
		$password_confirm = '';
		$passMatch = NULL;

		if (isset($_POST['name']) &&
			isset($_POST['login']) &&
			isset($_POST['password']) &&
			isset($_POST['password_confirm'])) {
			$name = safe($_POST['name']);
			$login = safe($_POST['login']);
			//хешируем пароль
			$password = safe($_POST['password']);
			$password_confirm = safe($_POST['password_confirm']);
			if ($password == $password_confirm) {
				$passMatch = true;
				$password = password_hash($password, PASSWORD_DEFAULT);
				//добавляем пользователя в БД
				addUser($name, $login, $password);

				header('location: /index.php?c=user&act=registered');
				die;
			} else {
				$passMatch = false;
			}
		}
		return $passMatch;
	}

	public function isUserAuth() {
		return isset($_SESSION['user_id']);
	}

	public function createGuest() {
		$newUserId = M_DB::addUser('Гость', '', '');
		$_SESSION['user_id'] = $newUserId[0]['id'];
	}
}