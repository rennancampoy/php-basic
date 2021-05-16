<?php

use App\Controller\ClientController;

require __DIR__ . '/vendor/autoload.php';

include __DIR__ . '/includes/header.php';

$clientController = new ClientController();
$clients = $clientController->getClients();

include __DIR__ . '/includes/list.php';
include __DIR__ . '/includes/footer.php';
