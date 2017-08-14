<h1>Strings</h1>
<?php

$str1 = 'Single quotes, outputs \ as slash, \\ as slash; Can output \' either; Variables $are not handled <br>';
echo $str1;
$str2 = "
\r - caret return
\n - new line
\t - horizontal tab
\v - vertical tab
\e - escape symbol
\\ - backslash
\$ - dollar sign
\" - double quote
\f - form feed<br>
also variables handling is possible
";
echo $str2;
?>
<h2>Heredoc</h2>
<?php
$variable = 'pasted value';
$heredoc = <<<HANDLED
    Here is text
     <p><strong>{$variable}</strong> - variables are handled</p>
        
HANDLED;

$nowdoc = <<<'NOT_HANDLED'
    Here is text
     <p><strong>{$str}</strong> - variables are not handled</p>
        
NOT_HANDLED;

echo $heredoc, $nowdoc;

class Nowdoc
{
    public static $var = <<<'TEXT'
    test
TEXT;

}

echo Nowdoc::$var;
?>

<h3>Variables processing</h3>
<h4>Simple syntax</h4>
<?php
$var = 'simple var';
$array = ['array_field' => 'Array field'];
$object = (object)['field' => 'Object field'];

echo "Simple var : $var<br> Array field: $array[array_field]<br> Object field: $object->field<br>";

?>
<h4>Complex syntax</h4>
<?php
$arr = [];
$arr[] = ['some' => 'string'];
?>
<?=
 "{$arr[0]['some']}";
?>


<?php
class StaticValues
{
    public static $str = 'static_field';
    const constant = 'constant';
}
$static_field = '1';
$constant = '2';
echo "{${StaticValues::$str}} , {${StaticValues::constant}}";
?>

<h4>Index access</h4>
<?php
$string = 'Something';
echo $string[3]; // e
echo $string{3}; // e
echo $string[-1]; // g , starting from PHP 7.1
echo $string{-1}; // g , starting from PHP 7.1
$a = 'str';
$a[5] = 'genius';
echo $a; // str  g, adds spaces where indexes didn't exist, assigns first char of the string;
$a[7] = ''; // warning - forbidden to add empty string
?>
<h4>Variables to strings</h4>
<p><?= 1; ?>  - 1</p>
<p><?= 1.23; ?>  - 1.23. . or , defined by locale</p>
<p><?= true; ?>  - 1</p>
<p><?= false; ?>  - empty string</p>
<p><?= []; ?>  - Array</p>
<?php
class Stringable
{
    function __toString()
    {
        return '__toString() method output';
    }

}
?>
<p><?= new Stringable(); ?>  - Object</p>
<p><?= curl_init(); ?>  - Resource id #2</p>

