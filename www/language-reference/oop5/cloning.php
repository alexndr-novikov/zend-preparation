<h1>Object Cloning</h1><?php

class CloneClass
{
    public $prop = 10;
}

class CustomCloneClass
{
    function __clone()
    {
        $this->prop = new static();
    }
}

$obj = new CloneClass;
$obj->prop = 20;

$clone = clone $obj;

var_dump($obj, $clone);

$clone->prop = 30;
br();
var_dump($obj, $clone);


$refObj = new class {
    public $prop = 1;
};


$obj->prop =& $refObj;

$clone = $obj;

$clone->prop->prop = 10;

br();
var_dump($obj, $clone);

br();

$obj = new CustomCloneClass;
$obj->prop = 10;
var_dump(clone $obj);

var_dump((clone $obj)->prop);
