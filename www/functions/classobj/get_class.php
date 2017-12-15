<?php use \Doc\helpers\HTML;
HTML::h1('get_class');


class A
{
    public function whoA()
    {
        HTML::p(get_class($this));
    }
}

class B extends A
{
    public function whoB()
    {
        HTML::p(get_class($this));
        HTML::p('No $this: ' . get_class());
    }
}

HTML::p(get_class($a = new A));
HTML::p(get_class($b = new B));
$a->whoA();
$b->whoA();
$b->whoB();

var_dump(get_class([])); // false + warning