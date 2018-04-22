<h1>Alternative syntax for control structures</h1><?php


if (true):
    //some code
elseif (true): // else if will cause an error
    //some code
else:
    //some code
endif;

$i = 0;

while ($i < 10):
    $i++;
endwhile;

switch ('a'):
    case 'a':
        // some code
        break;
endswitch;

for ($i = 0; $i < 10; $i++):
    // some code
endfor;

foreach ([] as $item):
    //some code
endforeach;


// <?php switch ('a'): ? >
//  <?php case 'a': echo 'a'; break; //error here - output in the line first char ? >
// <?php endswitch; ? >
