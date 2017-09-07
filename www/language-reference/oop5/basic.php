<h1>The Basics</h1><?php


class A
{
    public function foo()
    {
        if(isset($this)) {
            echo "\$this is set in " . get_class($this); br();
        } else {
            echo "\$this is not set";br();
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

echo "A:";br();
var_dump($a->constr());
var_dump($a->constr2());
$c = new C;
br();echo "C:";br();
var_dump($c->getA());
var_dump($c->constr()); // A
var_dump($c->constr2()); // C, late static binding

$str = 'A';
br();br();
var_dump(new $a);

class Simple
{
    public $prop = 10;
}
br();
$obj = new Simple;
$obj2 = $obj;
$obj3 = $obj;
$obj4 =& $obj;
$obj2->prop = 11;
echo '$obj: ';var_dump($obj);br();
echo '$obj3: ';var_dump($obj3);br();
echo '$obj4: ';var_dump($obj4);
br();
br();
$obj = null;
echo '$obj: ';var_dump($obj);br();
echo '$obj3: ';var_dump($obj3);br();
echo '$obj4: ';var_dump($obj4);

var_dump((new Simple())->prop);

class Func
{
    public $func;
    public function __construct()
    {
        $this->func = function (){
            echo 'Function<br>';
        };
    }

}

((new Func)->func)(); // Function<br>



class D extends C
{
    function foo()
    {
        echo static::class;br();
        parent::foo();
    }
}

(new D)->foo();