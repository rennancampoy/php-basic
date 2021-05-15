<?php

class Person
{

	private $name;
	private $age;

	function __construct(string $name, int $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
}

$person = new Person("Rennan", 26);

var_dump($person);
