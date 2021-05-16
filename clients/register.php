<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\ClientController;
use App\Entity\Client;

if (isset($_POST['name'], $_POST['age'], $_POST['email'])) {
	$newClient = new Client($_POST['name'], $_POST['age'], $_POST['email']);
	ClientController::registerClient($newClient);

	header('location: index.php?status=success');
	exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
