<?php
error_reporting(E_ALL);

$a = 1.234;
$b = 1.1e2; // 1.1 * 10^2
$c = 7e-1; // 7 + 10^-1

var_dump($a, $b, $c);

echo '<h3>Converting</h3>';

var_dump((float)((object)[0 => 'a'])); // generates warning

var_dump((int)((0.7+0.1) * 10)); // outputs 7, http://floating-point-gui.de/basic/


echo '<h3>Compare</h3>';

$a = 1.123456789;
$b = 1.123456780;
$epsilon = 0.00001;

var_dump($a === $b); // false
var_dump(abs($a - $b)); // 9.0000000785295E-9
var_dump(abs($a - $b) * 1e9); // 9.0000000785295 , not 9
var_dump(abs($a - $b) < $epsilon); // true
echo "<br>NaN:<br>";
// NaN compared to anything exept true is false (even to itself)
echo "NAN == NAN: " ; var_dump(NAN == NAN); echo '<br>'; // false
echo "NAN !== true: " ; var_dump(NAN !== true); echo '<br>'; // true
echo "is_nan(NAN): " ; var_dump(is_nan(NAN)); echo '<br>'; // true

