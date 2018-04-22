<?php use \Doc\helpers\HTML;

HTML::h1('Errors in PHP 7');



echo 'new Error() instanceof Throwable : ';
var_dump(new Error() instanceof Throwable); HTML::br();
echo 'new Exception() instanceof Throwable : ';
var_dump(new Exception() instanceof Throwable); HTML::br();
HTML::br();
echo 'new Exception() instanceof Error : ';
var_dump(new Exception() instanceof Error); // Error !== Exception
HTML::br();HTML::br();

echo 'new AssertionError() instanceof Error : ';
var_dump(new AssertionError() instanceof Error); HTML::br();
echo 'new ArithmeticError() instanceof Error : ';
var_dump(new ArithmeticError() instanceof Error); HTML::br();
echo 'new DivisionByZeroError() instanceof ArithmeticError : ';
var_dump(new DivisionByZeroError() instanceof ArithmeticError); HTML::br();
echo 'new DivisionByZeroError() instanceof Error : ';
var_dump(new DivisionByZeroError() instanceof Error); HTML::br();
echo 'new ParseError() instanceof Error : ';
var_dump(new ParseError() instanceof Error); HTML::br();
echo 'new TypeError() instanceof Error : ';
var_dump(new TypeError() instanceof Error); HTML::br();
echo 'new ArgumentCountError() instanceof TypeError : ';
var_dump(new ArgumentCountError() instanceof TypeError); HTML::br();
HTML::h3('Hierarchy: ');
?>
<p><strong>Throwable</strong></p>
<ul>
    <li>
        <p>Error</p>
        <ul>
            <li>ParseError</li>
            <li>
                <p>TypeError</p>
                <ul>
                    <li>ArgumentCountError</li>
                </ul>
            </li>
            <li>
                <p>ArithmeticError</p>
                <ul>
                    <li>DivisionByZeroError</li>
                </ul></li>
            <li>AssertionError</li>
        </ul>
    </li>
    <li>Exception</li>
</ul>
