<h1>for</h1><?php


function iterate(&$var) {$var++;}
function init() {return 0;}
function check($var) {return $var < 10;}

for ($i = init(); check($i); iterate($i)) {
    echo $i . br();
}
br();
// or just
for ($i = 0; $i < 10; $i++) {
    echo $i . br();
}

br();
$i = 0;
for (; $i < 10; $i++) {
    echo $i . br();
}
br();
$i = 0;
for (; ; $i++) {
    if($i > 9) break;
    echo $i . br();
}
br();
$i = 0;
for (; ; ) {
    if($i > 9) break;
    echo $i . br();
    $i++;
}


$array = array_fill(0, 500000, 'some string');

microtime(true);


$start =  microtime(true);
echo 'Optimal';br();
for ($i = 0, $length = count($array); $i < $length; $i++)
{
    $array[$i] = 'some string';
}
echo microtime(true) - $start;
br();

$start = microtime(true);
echo 'Brutal';br();
for ($i = 0; $i < count($array); $i++)
{
    $array[$i] = 'some string';
}
echo microtime(true) - $start;
br();




