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


var_dump(getTen());br();
var_dump(getNull());br();

return;

echo 10; // this won't be reached