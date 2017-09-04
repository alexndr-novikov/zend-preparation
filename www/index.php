<?php
require 'vendor/autoload.php';

function br() {echo '<br>';}

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$app = new \Doc\Application();
$response = $app->handleRequest($request);
$response->send();
?>