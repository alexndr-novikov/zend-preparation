<?php use \Doc\helpers\HTML;
HTML::h1('array_fill()');


class Foo
{

}


HTML::pre(array_fill(100, 5, new Foo));
HTML::pre(array_fill(-2, 5, new Foo));
HTML::pre(array_fill(-2, 0, new Foo));
var_dump(array_fill(-2, -1, new Foo)); // warning, false