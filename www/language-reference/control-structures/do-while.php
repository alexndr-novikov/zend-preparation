<h1>do-while</h1><?php

do {
    echo 'Outputed anyway'; \Doc\helpers\HTML::br();
} while(isset($a));


do {
    break;
    echo 'Not outputed'; \Doc\helpers\HTML::br();
} while(isset($a));