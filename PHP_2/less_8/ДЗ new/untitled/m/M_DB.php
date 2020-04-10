<?php

class M_DB extends M_Base {

	private static function getDB_config() {
		return [
			'db_user' => 'root',
			'db_pass' => '',
			'db_host' => 'localhost:3306',
			'db_name' => 'galery',
			'charset' => 'utf8',
		];
	}

	private static function myDB_connect() {
		try {
			$config = self::getDB_config();
			$host = $config['db_host'];
			$db = $config['db_name'];
			$user = $config['db_user'];
			$pass = $config['db_pass'];
			$charset = $config['charset'];

			$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
			$opt = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES => false,
			];
			return new PDO($dsn, $user, $pass, $opt);
		} catch (Exception $e) {
			die('ERROR: ' . $e->getMessage());
		}
	}

	public function getAssocResult($query, $start = 0, $limit = 3) {
		$pdo = self::myDB_connect();

		$stmt = $pdo->prepare($query);
		$stmt->execute(array(':start' => $start, ':limit' => $limit));

		$return = $stmt->fetchAll();

		return $return;
	}

	public function getSimpleResult($query) {
		$pdo = self::myDB_connect();

		$stmt = $pdo->prepare($query);
		$stmt->execute();

		$return = $stmt->fetchAll();

		return $return;
	}

	public function executeQuery(string $query) {
		$pdo = self::myDB_connect();

		$stmt = $pdo->prepare($query);
		$result = $stmt->execute();

		return $result;
	}

	public function getCart($query, $id) {
		$pdo = self::myDB_connect();

		$stmt = $pdo->prepare($query);
		$stmt->execute(array(':id' => $id));

		$return = $stmt->fetchAll();

		return $return;
	}

	public function deleteGoodDB($query, $user_id, $good_id) {
		$pdo = self::myDB_connect();

		$stmt = $pdo->prepare($query);
		$stmt->execute(array(':user_id' => $user_id, ':good_id' => $good_id));

		$return = $stmt->fetchAll();

		return $return;
	}

	public function addProductDB(string $query, $qty, $product, $user_id) {
		$pdo = self::myDB_connect();

		$stmt = $pdo->prepare($query);
		$result = $stmt->execute(array(':newQty' => $qty, ':productID' => $product, ':id' => $user_id));

		return $result;
	}

	public function getUser($login) {
		$query = "SELECT * FROM users WHERE user_login = \"$login\" LIMIT 1";
		$user = self::getSimpleResult($query);

		return $user[0] ?? false;
	}

	public function addUser($name, $login, $password) {
		$config = self::getDB_config();
		$db = $config['db_name'];
		$query = "INSERT INTO $db.`users` (`user_name`, `user_login`, `user_pass`) VALUES (\"$name\", \"$login\", \"$password\");";
		executeQuery($query);
		return getSimpleResult("SELECT * FROM users WHERE id=(SELECT MAX(id) FROM users);");
	}
}
