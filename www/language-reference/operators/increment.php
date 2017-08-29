<h1>Incrementing/Decrementing Operators</h1><?php
$a = 5;
echo '$a++<br>'; // 5
echo 'In time: ' . $a++ . '<br>'; // 5
echo 'After: ' . $a . '<br>'; // 6

$a = 5;
echo '++$a<br>'; // 5
echo 'In time: ' . ++$a . '<br>'; // 6
echo 'After: ' . $a . '<br>'; // 6

$a = 5;
echo '$a--<br>'; // 5
echo 'In time: ' . $a-- . '<br>'; // 5
echo 'After: ' . $a . '<br>'; // 4

$a = 5;
echo '--$a<br>'; // 5
echo 'In time: ' . --$a . '<br>'; // 4
echo 'After: ' . $a . '<br>'; // 4

$true = true;
var_dump(--$true, ($true--), ++$true, ($true++));
echo '<br>';
$false = false;
var_dump(--$false, ($false--), ++$false, ($false++));
echo '<br>';
$null = null;
var_dump(--$null, ($null--), ++$null, ($null++));
echo '<br>';

$char = 'a';
for($i = 0; $i < 100; $i++) {
    echo  ++$char . ' ';
}
echo '<br>';

$char = 'A1';
for($i = 0; $i < 100; $i++) {
    echo  ++$char . ' ';
}
echo '<br>';


$char = 'A01';
for($i = 0; $i < 100; $i++) {
    echo  ++$char . ' ';
}
echo '<br>';




$char = 'a';
for($i = 0; $i < 10; $i++) {
    echo  --$char . ' ';
}
echo '<br>';

$char = 'A1';
for($i = 0; $i < 10; $i++) {
    echo  --$char . ' ';
}
echo '<br>';


$char = 'A01';
for($i = 0; $i < 10; $i++) {
    echo  --$char . ' ';
}
echo '<br>';