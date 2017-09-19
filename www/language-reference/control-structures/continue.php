<h1>continue</h1><?php


$iterator = 1;
while ($iterator < 10) {
    echo 'Lvl 1, iterator=' . $iterator;\Doc\helpers\HTML::br();
    while (true) {
        echo 'Lvl 2, iterator=' . $iterator;\Doc\helpers\HTML::br();
        $iterator++;
        while (true) {
            echo 'Lvl 3, iterator=' . $iterator;\Doc\helpers\HTML::br();
            $iterator++;
            continue 3;
            echo 'Lvl 3 - end, iterator=' . $iterator;\Doc\helpers\HTML::br();

        }
        echo 'Lvl 2 - end, iterator=' . $iterator;\Doc\helpers\HTML::br();
    }
    break;
    echo 'Lvl 1 - end, iterator=' . $iterator;\Doc\helpers\HTML::br();
}
$i = 0;
while ($i < 10) {
    $i++;
    if($i % 2 == 1) continue;
    echo $i;
}