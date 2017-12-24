<?php use \Doc\helpers\HTML;

HTML::h1('property_exists');

class A
{
    public $a;
    protected $b;
    private $c;

    public static $d;
    protected static $e;
    private static $f;

    public const A = 1;
    protected const B = 1;
    private const C = 1;
}

HTML::dump(property_exists(new A, 'a'));
HTML::dump(property_exists('A', 'b'));
HTML::dump(property_exists('A', 'c'));
HTML::dump(property_exists('A', 'd'));
HTML::dump(property_exists('A', 'e'));
HTML::dump(property_exists('A', 'f'));
HTML::br();
HTML::dump(property_exists('A', 'A')); // ignores const, false
HTML::dump(property_exists('A', 'B')); // ignores const, false
HTML::dump(property_exists('A', 'C')); // ignores const, false