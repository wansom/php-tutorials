<?php

declare(strict_types=1);

require_once('vendor/autoload.php');
require_once('db_connect.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbConnection = (new DatabaseConnector())->getConnection();

?>