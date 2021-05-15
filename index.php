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

	function getProp(string $propName)
	{
		return $this->$propName;
	}
}

$person = new Person("Rennan", 26);

$arrayPersons = array(new Person("A", 1), new Person("B", 2), new Person("C", 3), new Person("D", 4));

var_dump($person);
var_dump($arrayPersons);

foreach ($arrayPersons as $person) {
	echo $person->getProp("age") . "<br/>;
}
