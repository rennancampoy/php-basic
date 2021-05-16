<?php

namespace App\Entity;

class Client
{
	private $id;
	private $name;
	private $age;
	private $email;

	function __construct(string $name=null, int $age=null, string $email=null, int $id = null)
	{
		if ($id !== null) $this->id = $id;
		if ($name !== null) $this->name = $name;
		if ($age !== null) $this->age = $age;
		if ($email !== null) $this->email = $email;
	}

	public function getProp(string $propName)
	{
		return $this->$propName;
	}
}
