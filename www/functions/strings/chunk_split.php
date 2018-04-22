<?php use \Doc\helpers\HTML;

HTML::h1('chunk_split');


$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ?modus=asd mollit anim id est laborum.";

HTML::p(nl2br(chunk_split($str, 40, "\r\n")));
