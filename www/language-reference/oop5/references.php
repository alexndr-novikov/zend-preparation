<?php use \Doc\helpers\HTML;

HTML::h1('Objects and references');


class A
{
    public $foo = 1;
}

$a = new A;
$b = $a;
$b->foo = 2;
HTML::tag('p', $a->foo);
$c = &$a;
HTML::tag('p', $c->foo);
$c->foo = 10;
HTML::tag('p', $a->foo);
