<?php use \Doc\helpers\HTML;
HTML::h1('var_dump');

class A
{
    public $a = 1;
    protected $b = 2;
    private $c = 3;

    public static $d = 4;
    protected static $e = 5;
    private static $f = 6;
}

class B extends A{
    public function __debugInfo()
    {
        return [
            'totally false info'
        ];
    }

}

var_dump(new A);
HTML::br();
var_dump(new B);