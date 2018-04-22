<?php use \Doc\helpers\HTML;

HTML::h1('html_entity_decode');


$string = "I'll \"walk\" to <p>the</p> <script>console.log('it\'s alive')</script>";

HTML::dump($string = htmlentities($string));
HTML::dump(html_entity_decode($string));
HTML::dump(html_entity_decode($string, ENT_NOQUOTES | ENT_HTML5, 'cp1251'));
HTML::dump(html_entity_decode($string, ENT_NOQUOTES | ENT_HTML5, 'utf-8'));
