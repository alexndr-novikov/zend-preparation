<?php use \Doc\helpers\HTML;
HTML::h1('sscanf');


HTML::dump(sscanf('123 cats', '%d %s'));
list($number, $cats) = sscanf('123 cats', '%d %s');
HTML::dump($number);
HTML::dump($cats);


$dogs = 0;
$number = 0;
HTML::dump(sscanf('125 dogs', '%d %s', $number, $dogs));
HTML::dump($number);
HTML::dump($dogs);

HTML::dump(sscanf('125 doggies', '%2$d %1$s', $dogs, $number));
HTML::dump($dogs);
HTML::dump($number);


list($r, $g, $b) = sscanf('00ccff', '%2x%2x%2x');
HTML::pre(['r' => $r, 'g' => $g, 'b' => $b]);