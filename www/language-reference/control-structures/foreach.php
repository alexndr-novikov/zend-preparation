<h1>foreach</h1><?php


$array = [1, 2, 6 => 3, 4, 5, 6];

foreach ($array as $key => $value) {
    echo "Index: {$key}, element {$value}";br();
}

foreach ($array as &$value) {
    $value *= $value;
}

var_dump($array); // each item ^2
br();
var_dump($value); // it's a link on last array item
$value = 1;
br();
var_dump($array);
unset($value);
$value = 10;
br();
var_dump($array);


foreach ([1, 2, 4] as &$value) { // possible starting from php 5.5
    $value += 1;
}
br();
$array = [1 => 'a', 'b' => 10, 100, null];
reset($array);
while (list($key, $value) = each($array)) {
    echo "Index: {$key}, element {$value}";br();
}
// equal to
foreach ($array as $key => $value) {
    echo "Index: {$key}, element {$value}";br();
}

$array = [
        [0, 0, 1],
        [0, 1, 0],
        [0, 1, 1],
        [1, 0, 0],
        [1, 0, 1],
        [1, 1, 0],
        [1, 1, 1],
];

foreach ($array as list($col1 , $col2, $col3)) {
    echo "{$col1} {$col2} {$col3}";br();
}

foreach ($array as list($col1 , $col2)) { // ignore last column
    echo "{$col1} {$col2}";br();
}

foreach ($array as list(,, $col3)) { // only last column
    echo "{$col3}";br();
}