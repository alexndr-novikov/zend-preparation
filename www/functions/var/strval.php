<?php use \Doc\helpers\HTML;
HTML::h1('strval');


class A
{
    public function __toString()
    {
        return self::class;
    }
}

HTML::dump(strval(new A));
HTML::dump(strval(120));
HTML::dump(strval(1e10));
HTML::dump(strval([]));