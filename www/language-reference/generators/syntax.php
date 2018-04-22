<?php use \Doc\helpers\HTML;

HTML::h1('Generator syntax');


function generator()
{
    yield 1;
    yield 2;
    yield 3;
    return 10;
}

function associativeGenerator()
{
    yield 'a' => 1;
    yield 'b' => 2;
    yield 0 => 3;
    yield; //NULL
    return 10;
}
function &referenceGenerator()
{
    $value = 10;
    yield $value;
    yield $value;
    yield $value;
    yield $value;
    yield $value;
    yield $value;
    yield $value;
    return $value;
}

function allInOneGenerator()
{
    yield from generator();
    yield from associativeGenerator();
    yield from referenceGenerator();
    yield from range(100, 105);
    yield from new ArrayIterator([200, 201]);
    return 'end';
}


function iterate(Generator $generator)
{
    foreach ($generator as $key => $value) {
        echo "$key:$value ";
    }
    HTML::br();
    HTML::tag('strong', $generator->getReturn());
    HTML::br();
}

iterate(generator());
iterate(associativeGenerator());

foreach (referenceGenerator() as &$value) {
    $value--;
    echo "$value ";
}
HTML::br();

iterate(allInOneGenerator());

var_dump(iterator_to_array(allInOneGenerator()));
HTML::br();
HTML::br();
var_dump(iterator_to_array(allInOneGenerator(), false));
HTML::br();
