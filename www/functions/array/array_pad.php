<?php use \Doc\helpers\HTML;

HTML::h1('array_pad()');


class Foo
{
    public function __construct()
    {
        HTML::p(__CLASS__);
    }
}

$array = [];
HTML::pre($array);
$array = array_pad($array, 5, 1);
HTML::pre($array);
$array = array_pad($array, 2, 1);
HTML::pre($array); // nothing changed


$array = [1, 0, 1];

HTML::pre(array_pad($array, -6, 0)); // like binary
