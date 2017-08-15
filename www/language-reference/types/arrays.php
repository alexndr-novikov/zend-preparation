<h1>Arrays</h1>
<h4>Array creation</h4>
<?php
error_reporting(E_ALL);
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Or from PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];


// keys integer or string
// anything else converted to int

// last duplicate key overrides all previous

$array = [
    1 => 1,
    1.0 => 2,
    true => 3,
];

var_dump($array[1]); // 3

$array = [
    'a',
    4 => 'b',
    'c' // index = 5
];

var_dump($array);

echo  "<h4>Index access</h4>";
var_dump($array{5}); // c

function getArray()
{
    return [1,2,3];
}
var_dump(getArray()[2]); // 3
var_dump(getArray()[4]); // null + notice

function getInt()
{
    return 0;
}

var_dump(getInt()[0]); // Null, no errors
echo "<h4>Create array - alternative way</h4>";
$newArray[] = 1;
var_dump($newArray); // [1]

$newestArray[2] = 2;
var_dump($newestArray); // [2 => 2]

unset($array{4});
var_dump($array); //[a, c]

echo "<h4>Convert to array</h4>";


var_dump((array)1); // [1]
