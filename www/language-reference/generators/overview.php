<?php

namespace generators;

use \Doc\helpers\HTML;

HTML::h1('Generators overview');


function range()
{
    $newRange = \range(0, 10);
    foreach ($newRange as $value) {
        yield $value * 2;
    }
}

function rangeLessMemory($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}


$iterator = rangeLessMemory(0, 20, 2);

foreach ($iterator as $newValue) {
    HTML::tag('span style="margin-right:10px;"', $newValue);
}

HTML::br();


foreach (range() as $newValue) {
    HTML::tag('span style="margin-right:10px;"', $newValue);
}
HTML::br();

var_dump(range());
