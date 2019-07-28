<?php


class Connection 
{
	public $username = 'root';
	public $password = 'root';
	public $connectionString = 'mysql:host=localhost;dbname=itlhjune2019';
	public $options = [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];

	public function connectToDatabase()
	{
		try
		{
			$pdo = new PDO($this->connectionString,
						   $this->username,
						   $this->password,
						   $this->options);
			return $pdo;
		}
		catch(Exception $e)
		{
			var_dump("error in connection process! please check your connection string");
		}
		
	}

	public function executeQuery($query,$type)
	{
		$pdo = $this->connectToDatabase();
		$statement = $pdo->prepare($query);
		$success = $statement->execute();
		if($type =='select')
		return $statement->fetchAll();
		else
		return "query of $type executed successfully";	
	}
}
