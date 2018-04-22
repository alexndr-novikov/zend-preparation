<?php use \Doc\helpers\HTML;

HTML::h1('$http_​response_​header');

var_dump($http_response_header); // NULL, no http response done yet

file_get_contents('https://www.facebook.com/');
HTML::pre($http_response_header);
