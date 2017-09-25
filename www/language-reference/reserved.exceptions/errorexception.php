<?php use \Doc\helpers\HTML;

HTML::h1('ErrorException');


set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 500, $severity, $file, $line);
});


try {
    strpos();
} catch (ErrorException $e) {
    echo "Caught error exception";
    HTML::br();
    echo $e->getMessage();
    HTML::br();
    echo $e->getSeverity();
}
HTML::br();
HTML::br();

try {
    throw new ErrorException('Custom error exception', 0, E_RECOVERABLE_ERROR);
} catch (ErrorException $e) {
    echo "Caught ", $e->getMessage();
    HTML::br();
    echo 'With severity ' . $e->getSeverity();
}