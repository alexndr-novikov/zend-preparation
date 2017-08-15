<h1>Iterables</h1>
<p>Pseudo-type from PHP 7.1</p>
<p>Handles arrays and Traversable objects</p>
<?php

function goThrough(iterable $iterable)
{
    foreach ($iterable as $item) {
        echo "Found item! <br>";
    }
}

goThrough([1, 2, 3]);
// Type error: goThrough('Not traversable');
function goThrough1(iterable $iterable = null) {} // default values
function goThrough2(iterable $iterable = []) {} // default values

function returnIterable() : iterable {
    return [1, 2, 3];
}
echo returnIterable(){2};

function generatorsIterable(): iterable {
    yield 1;
    yield 2;
    yield 3;
}

foreach (generatorsIterable() as $item) {
    echo "$item <br>";
}


class ParentClass
{
    public function getArrayReturnIterable(array $array) : iterable {

    }
}

class ChildClass extends ParentClass
{
    public function getArrayReturnIterable(iterable $array): Traversable
    {

    }
}
// in extending array, iterable and Traversable are possible all ways
var_dump([new ParentClass, new ChildClass]);