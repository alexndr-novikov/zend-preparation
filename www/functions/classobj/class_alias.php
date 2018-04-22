<?php use \Doc\helpers\HTML;

HTML::h1('class_alias');

class_alias('\Doc\models\DocPage', 'Page', true);

$page = new Page('name', 'path');
 var_dump($page instanceof \Doc\models\DocPage);


 class A
 {
 }
 class B
 {
 }
 if (rand(0, 1)) { // conditional alias. can depend on PHP version, for example
     class_alias('A', 'C');
 } else {
     class_alias('B', 'C');
 }

 $a = new A;
 $b = new B;
 $c = new C;
HTML::br();
var_dump($c instanceof $a);
HTML::br();
var_dump($c instanceof $b);
HTML::br();
