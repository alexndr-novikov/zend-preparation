<h1>Assignment Operators</h1><?php
$a = ($b = 4) + 9;
var_dump($a, $b);

$object1 = (object)[
    'property' => 1,
];

$object2 = $object1; // link
$object3 = clone $object1; // value

$object1->property = 2;
var_dump($object2->property, $object3->property); // int(2) ,  int(1)



$a = 1;
$b = &$a;
$a = 10;
var_dump($b); // int(10)


class Some
{
}

$link = new Some(); // link, no & usage
