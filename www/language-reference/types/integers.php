<?php
// possible notations: 2,8,10,16

$binary = 0b01000; // possible from PHP 5.4. It's decimal 8. Binary is started with 0b....
$decimal = 8; // simple decimal 8
$octal = 010; // octal starts with 0, equal to decimal 8
$hex = 0x8; //hexadecimal, start with 0x , equal to decimal 8

//php int size
echo "<br>";
var_dump(PHP_INT_SIZE);
// php int max value
echo "<br>";
var_dump(PHP_INT_MAX);
// php int min value
echo "<br>";
var_dump(PHP_INT_MIN);
echo "<br>";
var_dump($binary === $decimal);
var_dump($octal === $decimal);
var_dump($hex === $decimal);


// FORBIDDEN in PHP7: $octal = 0109; // parse error - 9 in octal int


// integer overflow is converted to float

$int = 9999999999999999999999999999999;
var_dump($int); // float(1.0E+31)

$curlResource = curl_init();
var_dump((int)$curlResource); // outputs resource
var_dump((int)false === 0); // true
var_dump((int)2.19829 === 2); // true
var_dump((int)NAN === 0); // true
var_dump((int)INF === 0); // true

echo (int)((0.1+0.7) * 10); // echoes 7! warning!
