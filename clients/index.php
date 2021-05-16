<?php

require __DIR__.'/vendor/autoload.php';

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/footer.php';

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
