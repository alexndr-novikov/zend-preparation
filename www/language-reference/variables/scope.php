<?php

$a = 2;
$b = 3;

require_once 'scope.inc.php';

function test()
{
    var_dump($a); // Null
}

function testGlobal()
{
    global $a;
    var_dump($a); // 2
}

test();
testGlobal();

var_dump($GLOBALS['b']);
$GLOBALS['b'] = 7;

var_dump($b); // 7

echo '1';
function fib($n)
{
    static $iteraton = 1;
    static $a = 1;
    static  $b = 1;

    echo $b;

    $b += $a;
    $a = $b - $a;
    $iteraton++;

    if ($iteraton < $n) {
        fib($n);
    }
}

fib(7);
