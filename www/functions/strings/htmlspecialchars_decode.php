<?php use \Doc\helpers\HTML;

HTML::h1('htmlspecialchars_decode');


$string = "I'll \"walk\" to <p>the</p> & \" < > <script>console.log('it\'s alive')</script>";
HTML::dump($string = htmlspecialchars($string));

echo $string = htmlspecialchars_decode($string);

HTML::dump($string = htmlspecialchars($string, ENT_NOQUOTES));
echo $string = htmlspecialchars_decode($string);
