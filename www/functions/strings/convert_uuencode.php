<?php use \Doc\helpers\HTML;

HTML::h1('convert_uuencode');


$str = "Lorem ipsum dolor sit amet, \r\n
consectetur adipiscing elit, sed do eiusmod tempor  \r\n
incididunt ut labore et dolore magna aliqua.  \r\n
Ut enim ad minim veniam, quis nostrud  \r\n
exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  \r\n
Duis aute irure dolor in reprehenderit in voluptate velit  \r\n
esse cillum dolore eu fugiat nulla pariatur.  \r\n
Excepteur sint occaecat cupidatat non proident,  \r\n
sunt in culpa qui officia deserunt  \r\n?modus=asd
mollit anim id est laborum.";

HTML::dump(htmlspecialchars(convert_uuencode($str)));
