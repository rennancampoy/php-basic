<?php

namespace App\Controller;

use App\Database\Database;
use App\Entity\Client;

class ClientController
{
	private $db = null;

	function __construct()
	{
		$this->db = new Database('client');
	}

	public function registerClient(Client $client)
	{
		$this->db->insert([
			'name' => $client->getProp('name'),
			'age' => $client->getProp('age'),
			'email' => $client->getProp('email')
		]);
	}

	public function getClients()
	{
		$clientsFromDb = $this->db->selectAll();

		foreach ($clientsFromDb as $client) {
			$clientList[] = new Client($client['name'], $client['age'], $client['email'], $client['id']);
		}

		return $clientList;
	}
}
