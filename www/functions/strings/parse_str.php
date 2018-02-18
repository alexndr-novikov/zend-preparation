<?php use \Doc\helpers\HTML;
HTML::h1('parse_str');

$result = [];
$str = 'foo=1&foo=2&foo=3';
HTML::dump(parse_str($str));
HTML::dump(parse_str($str, $result));
HTML::dump($foo);
HTML::dump($result);

$str = 'foo[]=1&foo[]=2&foo[]=3';
parse_str($str);
parse_str($str, $result);
HTML::dump($foo);
HTML::dump($result);


$str = 'f oo=1'; // space to _
parse_str($str, $result);
HTML::dump($result);

$str = 'f oo=asd%20asda'; // space to _ + urldecode
parse_str($str, $result);
HTML::dump($result);