<?php use \Doc\helpers\HTML;

HTML::h1('count()');

$array = range(0, 20, 2);
$arrayMulti = [[1, 2, 3], [4, 5, 6]];

class CountMe implements Countable
{
    public function count()
    {
        return 200;
    }
}

HTML::p(count($array));
HTML::p(count(new CountMe()));
HTML::p(count($arrayMulti));
HTML::p(count($arrayMulti, COUNT_NORMAL));
HTML::p(count($arrayMulti, COUNT_RECURSIVE));