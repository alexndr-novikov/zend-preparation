<h1>NULL</h1>
<?php
$a = null;
$b = 1;
unset($b);
var_dump([$a, $b, $c]); // [null,null,null]

$c = 1;
var_dump((unset)$c); // null, deprecated from PHP 7.2
