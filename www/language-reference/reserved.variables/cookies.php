<?php use \Doc\helpers\HTML;

HTML::h1('$_​COOKIE');

$nextCookieValue = rand(1, 100);
HTML::tag('p', 'Next cookie value will be: ' . $nextCookieValue);
setcookie('$_COOKIE', $nextCookieValue);

HTML::tag('pre', print_r($_COOKIE, true));
