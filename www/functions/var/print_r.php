<?php use \Doc\helpers\HTML;

HTML::h1('print_r');


class A
{
    public $a = 1;
    protected $b = 2;
    private $c = 3;

    public static $d = 4;
    protected static $e = 5;
    private static $f = 6;
}

print_r(new A);
HTML::br();
print_r(1);
HTML::br();
print_r('a');
HTML::br();
print_r([]);
HTML::br();HTML::br();
$a = print_r([]);
var_dump($a);
HTML::br();
$a = print_r([], true);
var_dump($a);
