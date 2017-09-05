<?php
declare(strict_types=1);
declare(ticks=1);
declare(encoding='Windows-1251');

register_tick_function(function(){
    echo '<br>tick1<br>';
});
register_tick_function(function(){
    echo '<br>tick2<br>';
});


function sum(int $a, int $b) {
    return $a + $b;
}
// tick
echo sum(1, 2);
// tick
echo "<br>";
// tick
try {
    echo sum('1', '2');
    // tick
} catch (TypeError $e) {
    echo 'error happened';
    // tick
}