<?php

namespace App\Database;

use \PDO;
use PDOException;

class Database
{
	const HOST = 'localhost';
	const NAME = 'crud';
	const USER = 'root';
	const PASS = '';

	private $table;

	private $connection;

	public function __construct($table = null)
	{
		$this->table = $table;
		$this->setConnection();
	}

	private function setConnection()
	{
		try {
			$this->connection = new PDO(
				'mysql:host=' . self::HOST . ';dbname=' . self::NAME,
				self::USER,
				self::PASS
			);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die('Error: ' . $e->getMessage());
		}
	}

	private function execute($query, $params = [])
	{
		try {
			$statement = $this->connection->prepare($query);
			$statement->execute($params);
			return $statement;
		} catch (PDOException $e) {
			die('Error: ' . $e->getMessage());
		}	
	}

	public function insert($values)
	{
		$fields = implode(',', array_keys($values));
		$binds = array_pad([], count($values), '?');

		$query = 'INSERT INTO ' . $this->table . ' (' . $fields . ') VALUES (' . implode(',', $binds) . ')';

		$this->execute($query, array_values($values));

		return $this->connection->lastInsertId();
	}

	public function selectAll()
	{
		$query = 'SELECT * FROM ' . $this->table;

		return $this->execute($query)->fetchAll();
	}
}
