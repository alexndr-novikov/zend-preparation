<h1>return</h1><?php


function getTen() : int
{
    return 10;
}

$b = 1;

function getNull()
{
    return;
}


var_dump(getTen());\Doc\helpers\HTML::br();
var_dump(getNull());\Doc\helpers\HTML::br();

return;

echo 10; // this won't be reached