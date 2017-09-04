<h1>if</h1><?php


$a = 10;
$b = '';

if($b) {
    // don't reach it cause '' == false
    echo 'nope';
}

if($a)
    echo "reach this point<br>";

if($b)
    echo 'this won\'t echo<br>';
    echo 'but this will<br>';

if($a . $b) {
    echo "reach this point too<br>";
    echo "several instructions<br>";
}