<?php use \Doc\helpers\HTML;
HTML::h1('sizeof()');


$array = range(0, 20, 2);
$arrayMulti = [[1, 2, 3], [4, 5, 6]];

class CountMe implements Countable
{
    public function count()
    {
        return 200;
    }
}

HTML::p(sizeof($array));
HTML::p(sizeof(new CountMe()));
HTML::p(sizeof($arrayMulti));
HTML::p(sizeof($arrayMulti, COUNT_NORMAL));
HTML::p(sizeof($arrayMulti, COUNT_RECURSIVE));