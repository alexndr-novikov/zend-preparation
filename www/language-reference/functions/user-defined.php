<?php declare(strict_types=1); ?>
<h1>User-defined functions</h1><?php


function classFunction($arg)
{
    class NewClass
    {
        private $innerValue;

        public function __construct(string $innerValue)
        {
            $this->innerValue = $innerValue;
            return $this;
        }

        public function __toString() : string
        {
            return $this->innerValue;
        }
    }

    return (string)(new NewClass($arg));
}

echo classFunction('Hello');
\Doc\helpers\HTML::br();
a();
\Doc\helpers\HTML::br();
// b(); - Fatal error
function a()
{
    echo __FUNCTION__ , __LINE__;
}

if (true) {
    function b()
    {
        echo __FUNCTION__ , __LINE__;
    }
}

a();
\Doc\helpers\HTML::br();
b();
\Doc\helpers\HTML::br();
function c()
{
    echo __FUNCTION__ , __LINE__;
//    return; if return is here - d() is never declared even if c() is called
    function d()
    {
        echo __FUNCTION__ , __LINE__;
    }
}

// d(); - Fatal error here
c();
\Doc\helpers\HTML::br();
d();
\Doc\helpers\HTML::br();

var_dump(new NewClass(''));
\Doc\helpers\HTML::br();
function recursive($a)
{
    if ($a < 400) {
        echo "$a ";
        recursive($a+1);
    }
}

recursive(1);
