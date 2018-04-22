<?php use \Doc\helpers\HTML;

HTML::h1('interface_exists');


var_dump(interface_exists(DateTimeInterface::class, false));
HTML::br();
var_dump(interface_exists('SomeInterface', true));
HTML::br();

if (!interface_exists('SomeInterface', true)) {
    interface SomeInterface
    {
    }
    var_dump(interface_exists('SomeInterface', true));
    HTML::br();
}
