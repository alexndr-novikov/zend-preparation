<?php use \Doc\helpers\HTML;
HTML::h1('References');

$a = 2;
$b =& $a;

var_dump($b);

HTML::br();


function foo(&$bar) {} // hack to create references

foo($g);

var_dump($g); // null

$c = [];
foo($c['a']);
HTML::br();
var_dump(array_key_exists('a', $c));
HTML::br();
var_dump($c);

$var1 = 1;
$var2 = 2;

function workWithGlobals(bool $useGlobals = false)
{
    global $var1, $var2;
    if(!$useGlobals) {
        $var1 =& $var2;
    } else {
        $_REQUEST['var1'] =& $var2;
    }

}
HTML::br();
workWithGlobals();
var_dump($var1);
HTML::br();
workWithGlobals(true);
var_dump($var1); // how in the hell this doesn't fit the documentation?


$ref = 0;
$row =& $ref;

foreach ([1, 2, 3] as $row) {

}
HTML::br();
var_dump($ref); // 3
HTML::br();HTML::br();


unset($a);
unset($b);
unset($c);
$a = 1;
$b = [2, 3];
$c = [&$a, &$b[0] , &$b[1]];
$c[0]++;
$c[1]++;
$c[2]++;
var_dump($a);
HTML::br();
var_dump($b);
HTML::br();


unset($a);
unset($b);
unset($c);
HTML::br();
$a = 1;

$b = [&$a, 1, 2];

$c = $b;
$c[0]++;
var_dump($a); // 2
HTML::br();HTML::br();

function bar(&$a)
{
    $a++;
}

$a = 1;
bar($a);
var_dump($a);

$GLOBALS['var1'] = 'test value';

function ref(&$a)
{
    $a =& $GLOBALS['var1'];
}

$h = 1;
ref($h);
$GLOBALS['var1'] = 10;
var_dump($h); // 1, not 10

function &doRef()
{
    return $GLOBALS['var1'];
}
HTML::br();
$yep = doRef();
var_dump($yep); // 10
$GLOBALS['var1'] = 20;
HTML::br();
var_dump($yep); // 20