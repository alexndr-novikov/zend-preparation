<h1>Basics</h1>

<h4>Naming</h4>
<?php

$var = 1;
$___var = 2;
$Var = 3;
var_dump($var, $Var, $___var); // different

echo "<h4>References</h4>";
$a = 1;
$b = &$a;
$a = 2;
var_dump($b); //2

echo "<h4>Predefined</h4>";

var_dump($c); // null
var_dump(isset($c)); // false
