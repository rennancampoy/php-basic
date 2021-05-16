<?php

namespace App\Entity;

class Client
{
	private $name;
	private $age;
	private $email;

	function __construct(string $name, int $age, string $email)
	{
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}

	function getProp(string $propName)
	{
		return $this->$propName;
	}

	function register()
	{
		
	}
}