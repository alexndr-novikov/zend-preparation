<h1>do-while</h1><?php

do {
    echo 'Outputed anyway'; br();
} while(isset($a));


do {
    break;
    echo 'Not outputed'; br();
} while(isset($a));