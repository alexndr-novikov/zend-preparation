<h1>break</h1><?php


// switch
// while
// do-while
// for
// foreach

while (true) {
    while (true) {
        while (true) {
            $i++;
            if ($i > 10) {
                break 3;
            } // out all while's
        }
    }
}

echo "Dobby is free!";\Doc\helpers\HTML::br();

for ($i = 0; $i < 100; $i++) {
    if ($i == 10) {
        break;
    }
}

echo $i;
