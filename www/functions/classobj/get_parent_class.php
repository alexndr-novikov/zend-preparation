<?php use \Doc\helpers\HTML;

HTML::h1('get_parent_class');


class A
{
    public function parent()
    {
        var_dump(get_parent_class($this));
        HTML::br();
    }
}

class B extends A
{
}

class C extends B
{
}

$a = new A;
$b = new B;
$c = new C;
$a->parent();
$b->parent();
$c->parent();
var_dump(get_parent_class('')); // invalid object causes false
