<?php

$a = $b = 5;
echo '$a = $b = 5; <br>';
echo '$a: ';var_dump($a); echo '<br>'; // 5
echo '$b: ';var_dump($b); echo '<br>'; // 5
echo '<br>';
$c = 5;
$d = 5;
$e = $c++;
$f = ++$d;
echo '$c = 5;<br>
$d = 5;<br>
$e = $c++;<br>
$f = ++$d;<br>';
echo '$c: ';var_dump($c); echo '<br>'; // 6
echo '$d: ';var_dump($d); echo '<br>'; // 6
echo '$e: ';var_dump($e); echo '<br>'; // 5
echo '$f: ';var_dump($f); echo '<br>'; // 6
