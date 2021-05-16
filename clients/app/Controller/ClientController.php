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

	public function getClient($id)
	{
		return $this->db->select($id, Client::class);
	}

	public function getAllClients()
	{
		return $this->db->selectAll(Client::class);
	}

	public function deleteClient($id)
	{
		$this->db->delete($id);
	}

	public function updateClient(Client $client)
	{
		$this->db->update(
			[
				'name' => $client->getProp('name'),
				'age' => $client->getProp('age'),
				'email' => $client->getProp('email')
			],
			$client->getProp('id')
		);
	}
}
