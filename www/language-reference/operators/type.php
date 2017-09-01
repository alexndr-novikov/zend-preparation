<h1>Type Operators</h1><?php


class ClassA
{

}

class ClassB
{

}

class ClassC extends ClassA
{

}

interface InterfaceA
{

}

class ClassD implements InterfaceA
{

}

$a = new ClassA();
$b = new ClassB();
$c = new ClassC();
$d = new ClassD();
$interfaceName = 'InterfaceA';
echo "<div style='clear: both; height: 400px;'></div><h2>Output:</h2>";

var_dump($a instanceof ClassA); echo "<br>"; // true
var_dump($a instanceof ClassB); echo "<br>"; // false
var_dump($a instanceof $a); echo "<br>"; // true
var_dump($c instanceof $a); echo "<br>"; // true
var_dump($d instanceof InterfaceA); echo "<br>"; // true
var_dump($d instanceof $interfaceName); echo "<br>"; // true

// cant use constants in instanceof - generates fatal error
// was added in PHP 5, before it is_a() was used
// on release of PHP5 is_a was marked as deprecated, but since 5.3 it was allowed again
// Before 5.1 instanceof called __autoload if class didnt exist, to avoid it class name should be placed in variable as string