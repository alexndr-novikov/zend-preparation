<?php use \Doc\helpers\HTML;

HTML::h1('explode');

$string = "Lorem ipsum dolor sit amet, consectetur \r\n
adipiscing elit, sed do eiusmod tempor i\r\n
ncididunt ut labore et dolore magna aliq\r\n
ua. Ut enim ad minim veniam, quis nostru\r\n
d exercitation ullamco laboris nisi ut a\r\n
liquip ex ea commodo consequat. Duis aut\r\n
e irure dolor in reprehenderit in volupt\r\n
ate velit esse cillum dolore eu fugiat n\r\n
ulla pariatur. Excepteur sint occaecat c\r\n
upidatat non proident, sunt in culpa qui\r\n
officia deserunt ?modus=asd mollit anim\r\n
id est laborum.";

HTML::pre(explode("\r\n", $string));
HTML::pre(explode("\r\n", $string, 3));
HTML::pre(explode("\r\n", $string, -5));
HTML::dump(explode('', $string));
