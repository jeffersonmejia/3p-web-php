<?php
class Database
{

	private $connection;

	public function __construct()
	{
		$dsn = "mysql:host=db;dbname=web_php;charset=utf8mb4";
		$this->connection = new PDO($dsn, 'db', 'db', [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]);
	}

	public function query($sql)
	{
		return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	}
}
