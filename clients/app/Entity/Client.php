<?php

namespace App\Entity;

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
}
