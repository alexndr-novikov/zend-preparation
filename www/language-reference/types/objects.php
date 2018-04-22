<h1>Objects</h1>
<?php
class Some
{
}

var_dump(new Some()); // object
?>
<h4>Cast to object</h4>
<?php

$scalar = (object)1;
var_dump([$scalar, $scalar->scalar]);
$objFromArray = (object)[
    'name' => 'Me',
    'surname' => 'Gusto',
];
echo "{$objFromArray->name} {$objFromArray->surname}";
