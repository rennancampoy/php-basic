<?php

namespace App\Controller;

use App\Database\Database;
use App\Entity\Client;

class ClientController
{
	public static function registerClient(Client $client)
	{
		$db = new Database('client');
		$db->insert([
			'name' => $client->getProp('name'),
			'age' => $client->getProp('age'),
			'email' => $client->getProp('email')
		]);
	}
}
