<?php use \Doc\helpers\HTML;

HTML::h1('stristr');


$str = '!soMemail@example.com~';

HTML::dump(stristr($str, '@'));
HTML::dump(stristr($str, '@', false));
HTML::dump(stristr($str, '@', true));
HTML::dump(stristr($str, '~', true));
HTML::dump(stristr($str, '~'));
HTML::dump(stristr($str, '!', true));
HTML::dump(stristr($str, '!'));

HTML::br();
HTML::dump(strstr($str, 'm'));
HTML::dump(stristr($str, 'm'));

HTML::br();
HTML::dump(stristr($str, 'M'));
