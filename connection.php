<?php

class Connection {
	public $username = 'root';
	public $password = 'amexs123';
	public $connectionString = 'mysql:host=localhost;dbname=itlhjune2019';
	public $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

	public function connectToDatabase() {
		try
		{
			$pdo = new PDO($this->connectionString,
				$this->username,
				$this->password,
				$this->options);
			return $pdo;
		} catch (Exception $e) {
			var_dump("error in connection process! please check your connection string");
		}

	}

	public function executeQuery($query, $type) {
		$pdo = $this->connectToDatabase();
		$statement = $pdo->prepare($query);
		$success = $statement->execute();

		// var_dump($query);
		// var_dump($statement->fetchAll());
		// die();

		if ($type == 'select') {
			return $statement->fetchAll();

		} else {
			return $success;
		}

	}
}
