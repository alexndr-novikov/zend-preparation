<?php


$variable = 'Hello';

$Hello = 'my';

$my = 'name';

$name = 'is';

$is = 'Alex';

echo "$variable {$$variable} {$$$variable} {$$$$variable} {$$$$$variable}"; // Hello my name is Alex

class Test
{
    public $variable = 'Hello';

    public $Hello = 'my';

    public $my = 'name';

    public $name = 'is';

    public $is = 'Alex';
}

$object = new Test();
echo "<br>$object->variable 
    {$object->{$object->variable}} 
    {$object->{$object->{$object->variable}}}
    {$object->{$object->{$object->{$object->variable}}}}
    {$object->{$object->{$object->{$object->{$object->variable}}}}}
    "; // Hello my name is Alex
