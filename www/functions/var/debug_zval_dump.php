<?php use \Doc\helpers\HTML;
HTML::h1('debug_zval_dump');

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

debug_zval_dump($b);