<h1>Error Control Operators</h1><?php
error_reporting(E_ALL);

echo 'Next won\'t trigger error';

// функция обработки ошибок
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo '<br>But error handler said: <br>';
    var_dump($errno, $errstr, $errfile, $errline, error_reporting());
}

// переключаемся на пользовательский обработчик
$old_error_handler = set_error_handler("myErrorHandler");

@require 'anyfile.php';

echo 'This wont trigger';