<?php

require __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Edit Client');

use App\Controller\ClientController;
use App\Entity\Client;

if(!isset($_GET['id'])) {
	header('location: index.php?status=error');
	exit;
}

$clientController = new ClientController();
$client = $clientController->getClient($_GET['id']);

if (isset($_POST['name'], $_POST['age'], $_POST['email'])) {
	$newClient = new Client($_POST['name'], $_POST['age'], $_POST['email'], $client->getProp('id'));
	$clientController = new ClientController();
	$clientController->updateClient($newClient);

	header('location: index.php?status=success');
	exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
