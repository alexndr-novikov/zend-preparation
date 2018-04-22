<?php use \Doc\helpers\HTML;

HTML::h1('is_subclass_of');

class A
{
}

class B extends A
{
}

class C extends B
{
}

class D
{
}


interface Ia
{
}
interface IB extends Ia
{
}
class F implements IB
{
}



var_dump(is_subclass_of('C', 'A', true));
HTML::br();

var_dump(is_subclass_of(new D, 'A'));
HTML::br();

var_dump(is_subclass_of(1, 'A'));
HTML::br();

var_dump(is_subclass_of(new F, 'Ia'));
HTML::br();
