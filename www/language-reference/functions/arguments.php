<?php declare(strict_types=1);?><h1>Function arguments</h1><?php



echo "<h3>Passing arguments by reference</h3>";

$a = 2;

function byRefModify(&$arg)
{
    $arg = $arg ** 2;
    return $arg;
}
echo byRefModify($a);
\Doc\helpers\HTML::br();
echo byRefModify($a);
\Doc\helpers\HTML::br();
echo byRefModify($a);
\Doc\helpers\HTML::br();

echo "<h3>Default argument values</h3>";

function hasOneArgWithDefaultValue($arg = 'default')
{
    echo "Arg is {$arg}";
    \Doc\helpers\HTML::br();
}

hasOneArgWithDefaultValue();
hasOneArgWithDefaultValue('new set');

function hasThreeArgsWithOneWithDefaultValue(int $a, int $b, $someText = 'Sum is: ')
{
    echo $someText . ($a+$b);
    \Doc\helpers\HTML::br();
}

hasThreeArgsWithOneWithDefaultValue(1, 2);
hasThreeArgsWithOneWithDefaultValue(1, 2, 'Modified value is: ');

function ref(&$val = null)
{
    $val += 10;
    return $val;
}

$a = 0;
echo ref(); // null += 10 == 10
echo ref(); // null += 10 == 10
echo ref($a); // 10
echo ref($a); // 20

echo "<h3>Type declarations</h3>";

function typeHinter(stdClass $erg)
{ // class name
}

function typeHinter1(Traversable $erg)
{ /* interface name */
}
function typeHinter2(array $erg)
{ /* array */
}
function typeHinter3(callable $erg)
{ /* callable */
}
function typeHinter4(int $erg)
{ /* int */
}
function typeHinter5(bool $erg)
{ /* bool */
}
function typeHinter6(float $erg)
{ /* float */
}
function typeHinter7(iterable $erg)
{ /* iterable */
}

function booleanAsSynonimTypehint(boolean $arg)
{
    // smth
}

try {
    booleanAsSynonimTypehint(true);
} catch (TypeError $error) {
    echo "Type error triggered - boolean as class expected";
    \Doc\helpers\HTML::br();
}


class A
{
    public function staticCheck(self $a)
    {
        // self hinting
    }

    public function check(self $a)
    {
        // self hinting
    }
}

function AHandler(A $obj = null)
{
    return $obj;
}
var_dump(AHandler(new A));
var_dump(AHandler());
var_dump(AHandler(null));


echo "<h3>Strict typing</h3>";


function floater(float $a) : float
{
    return $a;
}
var_dump(floater(1)); // int passed, other types if not float will fail
var_dump(floater(1.1)); // still ok
try {
    floater('1.1');
} catch (TypeError $error) {
    echo "Type error triggered - string was not converted";
    \Doc\helpers\HTML::br();
}

echo "<h3>Variable-length argument lists</h3>";
class Cl
{
}

$array = array_fill(0, 1000000, new Cl());

function checkClever(Cl ...$cls)
{
    return true;
}

function checkBrutal($array)
{
    foreach ($array as $value) {
        if (!$value instanceof Cl) {
            throw new TypeError();
        }
    }
    return true;
}

function argsBefore55() // before 5.5
{
    echo "func_num_args(): " . func_num_args();
    \Doc\helpers\HTML::br();
    echo "count(func_get_args()): " . count(func_get_args());
    \Doc\helpers\HTML::br();
    echo "func_get_args(): ";
    print_r(func_get_args());
    \Doc\helpers\HTML::br();
    echo "func_get_arg(0): " . func_get_arg(0);
    \Doc\helpers\HTML::br();
    echo "func_get_arg(100): " . func_get_arg(100);
    \Doc\helpers\HTML::br();
}

argsBefore55(1, 2, 3, 4, 5, 6, 7);

microtime(true);

$start = microtime(true);
\Doc\helpers\HTML::br();
for ($i=0;$i<10;$i++) {
    checkClever(...$array);
}
echo microtime(true) - $start;
\Doc\helpers\HTML::br();

\Doc\helpers\HTML::br();

$start = microtime(true);
\Doc\helpers\HTML::br();
for ($i=0;$i<10;$i++) {
    checkBrutal($array);
}
echo microtime(true) - $start;
\Doc\helpers\HTML::br();
