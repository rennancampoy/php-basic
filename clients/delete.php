<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\ClientController;

if (isset($_GET['id'])) {
	$clientController = new ClientController();
	$clientController->deleteClient($_GET['id']);

	header('location: index.php?status=success');
	exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/footer.php';
