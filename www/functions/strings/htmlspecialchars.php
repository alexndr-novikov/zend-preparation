<?php use \Doc\helpers\HTML;
HTML::h1('htmlspecialchars');

$string = "I'll \"walk\" to <p>the</p> & \" < > <script>console.log('it\'s alive')</script>";
HTML::dump(htmlspecialchars($string));