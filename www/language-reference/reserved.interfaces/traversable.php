<?php

error_reporting(-1);
use \Doc\helpers\HTML;

HTML::h1('Traversable');

$obj = (object)['name' => 'Foo'];

function canBeUsedInForeach($object)
{
    return $object instanceof Traversable;
}


class IterateIt implements Iterator
{
    public function next()
    {
        // TODO: Implement next() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
    public function current()
    {
        // TODO: Implement current() method.
    }
    public function key()
    {
        // TODO: Implement key() method.
    }
}


var_dump(canBeUsedInForeach($obj));
HTML::br();
var_dump(canBeUsedInForeach(new IterateIt));
HTML::br();
