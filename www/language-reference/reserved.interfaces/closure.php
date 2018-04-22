<?php use \Doc\helpers\HTML;

HTML::h1('Closure');


try {
    $closure = new Closure;
} catch (\Throwable $e) {
    echo $e->getMessage();
}
HTML::br();
$closure = function () {
    var_dump($this->prop);
};

$callable = function ($a, $b) {
    echo $this->prop . " $a $b";
    HTML::br();
};
var_dump($closure instanceof Closure);

class SomeClass
{
    private $prop = 'value';

    public $callable;

    public function setCallable(callable $callable)
    {
        $this->callable = Closure::fromCallable($callable);
    }
}

$obj = new SomeClass;
$closure2 = $closure->bindTo($obj, $obj);
$closure3 = Closure::bind($closure, $obj, $obj); // similar to previous line
HTML::br();
$closure();
HTML::br();
$closure2();
HTML::br();
$closure3();
HTML::br();
$callable->call($obj, 10, 100);


$closure = function () {
    var_dump($this->prop);
};
$obj->setCallable($closure);
$new_closure = $obj->callable;
$new_closure();
