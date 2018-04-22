<h1>Logical Operators</h1><?php
$a = false || true; // $a = (false || true);
$b = false or true; // (($b = false) or true);

var_dump($a, $b, $b = false or true);
echo "<br><br>";


$a = true && false; // $a = (true && false);
$b = true and false; // (($b = true) and false);

var_dump($a, $b, $b = true and false);
echo "<br><br>";


function foo() : bool
{
    echo 'Never echo please';
    return true;
}

$a = true || foo(); // no foo() call
$b = true or foo(); // no foo() call
$c = false && foo(); // no foo() call
$d = false and foo(); // no foo() call

var_dump($a, $b, $c, $d);
echo "<br><br>";

var_dump(true xor true, true xor false, false xor true, false xor false);
