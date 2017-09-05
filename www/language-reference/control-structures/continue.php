<h1>continue</h1><?php


$iterator = 1;
while ($iterator < 10) {
    echo 'Lvl 1, iterator=' . $iterator;br();
    while (true) {
        echo 'Lvl 2, iterator=' . $iterator;br();
        $iterator++;
        while (true) {
            echo 'Lvl 3, iterator=' . $iterator;br();
            $iterator++;
            continue 3;
            echo 'Lvl 3 - end, iterator=' . $iterator;br();

        }
        echo 'Lvl 2 - end, iterator=' . $iterator;br();
    }
    break;
    echo 'Lvl 1 - end, iterator=' . $iterator;br();
}
$i = 0;
while ($i < 10) {
    $i++;
    if($i % 2 == 1) continue;
    echo $i;
}