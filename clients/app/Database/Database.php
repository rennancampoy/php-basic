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

	public function delete($id)
	{
		$query = 'DELETE FROM ' . $this->table . ' WHERE id = ' . $id;
		
		$this->execute($query);
	}

	public function update($values, $id)
	{
		$query = 'UPDATE ' . $this->table . ' SET ' . implode('=?, ', array_keys($values)) . ' = ? WHERE id = ' . $id;

		$this->execute($query, array_values($values));
	}

	public function select($id, $class)
	{
		$query = 'SELECT * FROM ' . $this->table . ' WHERE id = ' . $id;

		return $this->execute($query)->fetchObject($class);
	}

	public function selectAll($class)
	{
		$query = 'SELECT * FROM ' . $this->table;

		return $this->execute($query)->fetchAll(PDO::FETCH_CLASS, $class);
	}
}
