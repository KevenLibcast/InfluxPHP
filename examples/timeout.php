<?php

// Please launch a server with big delays before launching this script

require_once __DIR__.'/../vendor/autoload.php';

$client = new \crodas\InfluxPHP\Client('localhost', 8087);

echo "Timeout 2s\n";
$client->timeout = 2;
$client->getDatabases();
echo "Done\n";

echo "No timeout\n";
$client->timeout = null;
$client->getDatabases();
echo "Done\n";
