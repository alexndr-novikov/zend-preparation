<?php use \Doc\helpers\HTML;
HTML::h1('strtok');

$commitMessage = '[PRJ_12]:added-some-functionality';
$initialToken = strtok($commitMessage, '[]:-');
HTML::dump($initialToken);
while($token = strtok('[]:-')) {
    HTML::dump($token);
}

HTML::br();
//or

$token = strtok($commitMessage, '[]:-');
while ($token !== false) {
    HTML::dump($token);
    $token = strtok('[]:-');
}