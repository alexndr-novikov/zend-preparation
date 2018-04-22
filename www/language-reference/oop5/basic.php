<h1>The Basics</h1><?php


class A
{
    public function foo()
    {
        if (isset($this)) {
            echo "\$this is set in " . get_class($this);
            \Doc\helpers\HTML::br();
        } else {
            echo "\$this is not set";
            \Doc\helpers\HTML::br();
        }
    }

    public function constr()
    {
        return new self();
    }

    public function constr2()
    {
        return new static();
    }
}

class C extends A
{
    public function getA()
    {
        return new parent();
    }
}

class B
{
    public function bar()
    {
        A::foo();
    }
}
$a = new A;
$a->foo();

A::foo();

$b = new B;
$b->bar();

B::bar();

echo "A:";\Doc\helpers\HTML::br();
var_dump($a->constr());
var_dump($a->constr2());
$c = new C;
\Doc\helpers\HTML::br();echo "C:";\Doc\helpers\HTML::br();
var_dump($c->getA());
var_dump($c->constr()); // A
var_dump($c->constr2()); // C, late static binding

$str = 'A';
\Doc\helpers\HTML::br();\Doc\helpers\HTML::br();
var_dump(new $a);

class Simple
{
    public $prop = 10;
}
\Doc\helpers\HTML::br();
$obj = new Simple;
$obj2 = $obj;
$obj3 = $obj;
$obj4 =& $obj;
$obj2->prop = 11;
echo '$obj: ';var_dump($obj);\Doc\helpers\HTML::br();
echo '$obj3: ';var_dump($obj3);\Doc\helpers\HTML::br();
echo '$obj4: ';var_dump($obj4);
\Doc\helpers\HTML::br();
\Doc\helpers\HTML::br();
$obj = null;
echo '$obj: ';var_dump($obj);\Doc\helpers\HTML::br();
echo '$obj3: ';var_dump($obj3);\Doc\helpers\HTML::br();
echo '$obj4: ';var_dump($obj4);

var_dump((new Simple())->prop);

class Func
{
    public $func;
    public function __construct()
    {
        $this->func = function () {
            echo 'Function<br>';
        };
    }
}

((new Func)->func)(); // Function<br>



class D extends C
{
    public function foo()
    {
        echo static::class;
        \Doc\helpers\HTML::br();
        parent::foo();
    }
}

(new D)->foo();
