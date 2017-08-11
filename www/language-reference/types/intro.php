<?php

$bool = true;
$float = 1.12;
$int = 8;
$null = null;

echo gettype($null); // outputs NULL
echo '<br>';
var_dump($null); // outputs NULL
echo '<br>';
var_dump($float);
echo '<br>';
var_dump(is_int($int));
echo '<br>';
var_dump(is_int($float));