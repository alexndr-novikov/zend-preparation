<h1>switch</h1><?php

$a = 'a';
$b = 1;
switch ($b):
    case 1:
        echo '1';
        break;
    case 2:
        echo '2';
        break;
endswitch;
\Doc\helpers\HTML::br();
switch ($a) {
    case 0:
        echo 0; // (int)$a === 0
        break;
    default:
        echo ''; // never reached
}
\Doc\helpers\HTML::br();
switch (1):
    case 0:
        case 1:
            case 2: // ;, not : - possible
                echo '1, 2 or 4';
                break;
endswitch;
\Doc\helpers\HTML::br();
switch (1):
    case 1: echo 1;
    // no break
    case 2: echo ', and 2';
    // no break
    case 3: echo ', and 3';
    break;
endswitch;
