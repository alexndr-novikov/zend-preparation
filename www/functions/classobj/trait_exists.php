<?php use \Doc\helpers\HTML;

HTML::h1('trait_exists');


trait T
{
}

HTML::dump(trait_exists('T'));
HTML::dump(trait_exists('D'));
HTML::dump(trait_exists('\Symfony\Component\VarDumper\Test\VarDumperTestTrait', false));
HTML::dump(trait_exists('\Symfony\Component\VarDumper\Test\VarDumperTestTrait', true));
