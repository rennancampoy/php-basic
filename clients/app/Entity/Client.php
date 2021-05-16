<?php

namespace App\Entity;

class Client
{
	private $id;
	private $name;
	private $age;
	private $email;

	function __construct(string $name, int $age, string $email, int $id = 0)
	{
		$this->id = $id;
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}

	public function getProp(string $propName)
	{
		return $this->$propName;
	}

	public function setProp(string $propName)
	{
		$this->$propName = $propName;
	}
}
