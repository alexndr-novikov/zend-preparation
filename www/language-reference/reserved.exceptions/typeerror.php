<?php
declare(strict_types=1);
use \Doc\helpers\HTML;
HTML::h1('TypeError');

function sum(int $a, int $b) {

}

try {
    sum('1', '2');
} catch (\TypeError $e) {
    echo $e->getMessage();
    HTML::br();
    echo 'In file ' . $e->getFile() . 'line ' . $e->getLine() . ' with code ' . $e->getCode();
}
