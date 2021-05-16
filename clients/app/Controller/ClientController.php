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
		return $this->db->selectAll(Client::class);
	}

	public function deleteClient($id)
	{
		$this->db->delete($id);
	}
}
