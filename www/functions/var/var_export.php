<?php use \Doc\helpers\HTML;
HTML::h1('var_export');

$a = [1, 2, [2, 3]];
HTML::dump(var_export($a));
HTML::dump(var_export($a, true));

class A { public $var; }
$a = new A;
$a->var = 5;
HTML::dump(var_export($a, true));

class B {
    public $foo1;
    public $foo2;

    public function __construct($foo1, $foo2)
    {
        $this->foo1 = $foo1;
        $this->foo2 = $foo2;
    }

    /**
     * reversed
     * @param $an_array
     * @return static
     */
    public static function __set_state($an_array)
    {
        return new static($an_array['foo2'], $an_array['foo1']);
    }

}

$b = new B(1, 2);
HTML::dump($b);
eval('$b = ' . var_export($b, true) . ';');
HTML::dump($b);