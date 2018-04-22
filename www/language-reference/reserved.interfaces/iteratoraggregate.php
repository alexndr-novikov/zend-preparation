<?php use \Doc\helpers\HTML;

HTML::h1('IteratorAggregate');

class Agregator implements IteratorAggregate
{
    public $prop1 = 'prop1';
    public $prop2 = 'prop2';
    public $prop3 = 'prop3';

    public function __construct()
    {
        $this->prop4 = 'prop4';
    }

    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}

class Agregator2 implements IteratorAggregate
{
    public function getIterator()
    {
        return (function () {
            yield from range(1, 10);
        })();
    }
}

foreach ((new Agregator) as $key => $value) {
    echo sprintf('Key %s, value %s', $key, $value);
    HTML::br();
}

foreach ((new Agregator2) as $key => $value) {
    echo sprintf('Key %s, value %s', $key, $value);
    HTML::br();
}
