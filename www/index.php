<?php
require 'vendor/autoload.php';

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$app = new \Doc\Application();
$response = $app->handleRequest($request);
$response->send();
?>