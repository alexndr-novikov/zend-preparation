<h1>goto</h1><?php


$a = 10;

goto a;

$a = 20;

a:

var_dump($a);

for ($i = 0; $i < 100; $i++) {
    if ($i == 50) {
        goto end;
    }
}
end:
var_dump($i);
