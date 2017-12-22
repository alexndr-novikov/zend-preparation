<?php use \Doc\helpers\HTML;
HTML::h1('is_a');


class A {

}

class B extends A implements C{

}

interface C {

}

class D {

}

$a = new A;
var_dump(is_a($a, A::class));
HTML::br();
var_dump(is_a(B::class, A::class, true));
HTML::br();
var_dump(is_a($a, 'C'));
HTML::br();
var_dump(is_a(new B, 'C')); // interface name is also OK

HTML::br();
HTML::br();
HTML::br();
var_dump(is_a(new B, '\Faker\DefaultGenerator'));// no autoload triggered
HTML::br();
var_dump(class_exists('\Faker\DefaultGenerator', false));
HTML::br();
var_dump(is_a('\Faker\DefaultGenerator', 'D', true));// autoload triggered
HTML::br();
var_dump(class_exists('\Faker\DefaultGenerator', false));
HTML::br();
HTML::br();

var_dump(is_a('12', 'D', true));// autoload triggered
HTML::br();