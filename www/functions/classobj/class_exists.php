<?php use \Doc\helpers\HTML;
use \Doc\models\MenuRenderer;
HTML::h1('class_exists');


var_dump(class_exists('\Doc\models\DocPage', false));
var_dump(class_exists('\Doc\models\DocPage', true));
HTML::br();

var_dump(class_exists('\Doc\models\MenuRenderer', false));
var_dump(class_exists('\Doc\models\MenuRenderer', true));
HTML::br();

class A {}
var_dump(class_exists('A', false));
HTML::br();
