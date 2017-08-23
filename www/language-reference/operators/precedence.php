<?php

$b = 1;
$a = $b += 3;

var_dump($a, $b); // b = 4, a = 4

$a = true ? false : true ? 2 : 3;

var_dump($a); // 3

$a = 1;
$b = 1 + $a++;
$c = 1 + ++$a;

var_dump($b, $c); // 2, 4