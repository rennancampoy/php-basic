<?php

namespace App\Entity;

use App\Database\Database;

class Client
{
	private $id;
	private $name;
	private $age;
	private $email;

	function __construct(string $name, int $age, string $email)
	{
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}

	public function getProp(string $propName)
	{
		return $this->$propName;
	}

	public function register()
	{
		$objDatabase = new Database('client');
		$this->id = $objDatabase->insert([
			'name' => $this->name,
			'age' => $this->age,
			'email' => $this->email
		]);

		echo $this->id;
	}
}
