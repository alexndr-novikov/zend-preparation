<h1>else</h1><?php

if(true) {
    echo 'this is triggered as if condition'; \Doc\helpers\HTML::br();
} else {
    echo 'this is never reached';\Doc\helpers\HTML::br();
}

if(false) {
    echo 'this is never reached';\Doc\helpers\HTML::br();
} else {
    echo 'this is triggered as else condition';\Doc\helpers\HTML::br();
}
