<?php use \Doc\helpers\HTML;
HTML::h1('Type Hinting');

class A
{

}

class B
{
    public function process(A $a) : B // <==
    {
        return new self;
    }
}