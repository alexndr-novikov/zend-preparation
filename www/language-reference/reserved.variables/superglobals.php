<?php use \Doc\helpers\HTML;
HTML::h1('Superglobals');


HTML::tag('p','There are 9 of them');

HTML::tag('h4', '$GLOBALS;');
HTML::tag('pre', print_r($GLOBALS, true));

HTML::tag('h4', '$_COOKIE;');
HTML::tag('pre', print_r($_COOKIE, true));

HTML::tag('h4', '$_REQUEST;');
HTML::tag('pre', print_r($_REQUEST, true));

HTML::tag('h4', '$_ENV;');
HTML::tag('pre', print_r($_ENV, true));

HTML::tag('h4', '$_FILES;');
HTML::tag('pre', print_r($_FILES, true));

HTML::tag('h4', '$_GET;');
HTML::tag('pre', print_r($_GET, true));

HTML::tag('h4', '$_POST;');
HTML::tag('pre', print_r($_POST, true));

HTML::tag('h4', '$_SERVER;');
HTML::tag('pre', print_r($_SERVER, true));

HTML::tag('h4', '$_SESSION;');
HTML::tag('pre', print_r($_SESSION, true));

var_dump($GLOBALS['_GET'] === $_GET);
HTML::br();
var_dump($GLOBALS['_POST'] === $_POST);
HTML::br();
var_dump($GLOBALS['_COOKIE'] === $_COOKIE);
HTML::br();
var_dump($GLOBALS['_FILES'] === $_FILES);
HTML::br();
var_dump($GLOBALS['_SERVER'] === $_SERVER);
HTML::br();
var_dump($GLOBALS['_REQUEST'] === $_REQUEST);
HTML::br();
var_dump($GLOBALS['_ENV'] === $_ENV);
HTML::br();



