<h1>while</h1><?php


$i = 1;

while ($i < 10) {
    echo ++$i;
    \Doc\helpers\HTML::br(); // handled even when $i became == 10 on line upper
}