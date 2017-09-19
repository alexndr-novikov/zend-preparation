<h1>elseif/else if</h1><?php


function compare($a, $b)
{
    if($a === $b) {
        echo 'Equal and same type';
    } elseif ($a == $b) {
        echo 'Equal after type convert';
    } else if ($a < $b) { // elseif == else if using brackets
        echo '$a < $b';
    } elseif ($a > $b) {
        echo '$a > $b';
    } else {
        echo 'Something strange';
    }

    \Doc\helpers\HTML::br();
}

compare(1, 1);
compare(1, '1');
compare(1, '2');
compare('   4', 0b010);
compare(NAN, NAN);


