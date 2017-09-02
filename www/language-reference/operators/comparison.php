<h1>Comparison Operators</h1><?php


$a = 1;
$b = '1';
$c = true;
$d = 4;

var_dump($a == $b); echo "<br>"; // true
var_dump($a === $b); echo "<br>"; // false
var_dump($a != $c); echo "<br>"; // false
var_dump($a <> $c); echo "<br>"; // false
var_dump($a !== $b); echo "<br>"; // true
var_dump($a <= $b); echo "<br>"; // true
var_dump($a < $b); echo "<br>"; // false
var_dump($a > $d); echo "<br>"; // false
var_dump($a >= $b); echo "<br>"; // true


$a = 1;
$b = 2;
$c = 3;

var_dump($b <=> $a,$b <=> $b, $b <=> $c);


var_dump('1' == '01'); // true, conversation to int

$a = 'a';
switch ($a) {
    case 0:
        echo "<br>a matches 0 because switch converts string to int<br>";
        break;
    default:
        //never reach this place
        break;
}


var_dump(null == '1'); // null => '' => 0 , false
$a = '';
$b = '0';

echo '<br><br><br>But suddenly:';
var_dump($a == $b); // '' => 0 , false, WTF?
var_dump((int)$a == (int)$b); // true, WTF, no type conversion in upper line?
var_dump('a0' == '0'); // false

var_dump([1,2,3, 4] <=> [1,2, 3, 10 => 4]);


echo "<br>";
var_dump((0.1+0.7) == 0.8); // false, never compare floats in prod

echo "<br>";echo "<br>";
$a = true ? 'set true' : 'not going here<br>';
var_dump($a);

$a = false ? 'not going here' : 'set false<br>';
var_dump($a);

$a = false ?: 'set false<br>';
var_dump($a);


$true = '1';

$a = $true ?: 'somevalue';
var_dump($a); // string(1)

echo (true?'true':false?'t':'f'); // echos t, equal to ((true?'true':false)?'t':'f')

$array = ['a' => 1];
$value = $array['b'] ?? $array['a'];
var_dump($value); //1, no warning