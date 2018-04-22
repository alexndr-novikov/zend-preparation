<h1>Array Operators</h1><?php

$a = [1, 2, 3];
$b = [1, 2 => 2, 5 => 3];
$c = [1 => 2, 2 => 3, 0 => 1];

var_dump($a + $b); // left keys priority, same right ignored
var_dump($a == $c); // true
var_dump($a === $c); // false , wrong keys-value order
