<?php use \Doc\helpers\HTML;

HTML::h1('array_intersect()');


$array1 = [5 => 1, 2, 10 => 3, 4, 5, 6];
$array2 = [1, 3, 5];
HTML::pre(array_intersect($array1, $array2));
HTML::pre(array_intersect($array2, $array1));

class Intersactable
{
    public function __toString()
    {
        return 'someValue';
    }
}

HTML::pre(array_intersect([new Intersactable], ['someValue'])); // compares string representation
