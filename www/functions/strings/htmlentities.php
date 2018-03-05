<?php use \Doc\helpers\HTML;
HTML::h1('htmlentities');

$string = "I'll \"walk\" to <p>the</p> <script>console.log('it\'s alive')</script>";
HTML::dump(htmlentities($string));
HTML::dump(htmlentities($string, ENT_QUOTES | ENT_HTML5));
HTML::dump(htmlentities($string, ENT_QUOTES));