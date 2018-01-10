<?php use \Doc\helpers\HTML;

HTML::h1('isset');

$a = 1;
$b = 2;
$c = null;
HTML::dump(isset($a, $b)); // true
HTML::dump(isset($a, $b, $c)); // false
HTML::dump(isset($a, $b, $d)); // false

$a = [];
HTML::dump(isset($a['a']['a']['a']['a'])); // false, no warnings