<h1>include</h1><?php

set_include_path('/include');

$preset = 'preset';
var_dump(include 'include_file.php');
var_dump(include '.include_file.php'); // set_include_path ignored
var_dump(include './include_file.php'); // set_include_path ignored
var_dump(include '.,/include_file.php'); // set_include_path ignored
var_dump(include '/include_file.php'); // set_include_path ignored
var_dump(require_once '/include/include_file.php'); // set_include_path ignored

includedFunction();

function func()
{
    include_once 'include_function.php';
    /**
     * @var $a
     */
    var_dump($a);
}
var_dump($a);
func();
\Doc\helpers\HTML::br();
\Doc\helpers\HTML::br();

include $_SERVER['DOCUMENT_ROOT'] . '/include_path/include_file_remote.php';

afterReturnFunction();
