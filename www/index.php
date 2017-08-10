<?php
require 'vendor/autoload.php';

use Doc\models\MenuRenderer;

$mapSrc = include 'map.php';
$map = new MenuRenderer($mapSrc);
echo $map->render();
?>