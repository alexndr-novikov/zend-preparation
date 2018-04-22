<h1>Comparing Objects</h1><?php


class Comparable
{
    private $prop1;

    public function __construct($value)
    {
        $this->prop1 = $value;
    }
}

class ComparableExtended extends Comparable
{
}

$o = new Comparable(true);
$same = new ComparableExtended(true);
$b = new Comparable(1);
$o2 = $o;
$o3 = clone $o;
\Doc\helpers\HTML::br();
var_dump($o == $b); // true
var_dump($o === $b); // false
\Doc\helpers\HTML::br();
var_dump($o == $same); // false
var_dump($o === $same); // false
\Doc\helpers\HTML::br();
var_dump($o == $o2); // true
var_dump($o === $o2); // true
\Doc\helpers\HTML::br();
var_dump($o == $o3); // true
var_dump($o === $o3); // false


// == equals to each property of obj1 == each prop of obj2 && obj1 inctanceof same class
// === equals to reference on same obj
