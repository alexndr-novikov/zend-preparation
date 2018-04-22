<?php use \Doc\helpers\HTML;

HTML::h1('get_declared_traits');

HTML::pre(get_declared_traits());

trait A
{
}

trait B
{
}

HTML::pre(get_declared_traits());
