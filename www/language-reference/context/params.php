<?php use \Doc\helpers\HTML;

HTML::h1('Context parameters');

$postData = http_build_query(
    array(
        'author_name' => '1',
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'content' => $postData
    )
);





$context = stream_context_create();

stream_context_set_params($context, $opts);

$response = file_get_contents('http://demo.wp-api.org/wp-json/wp/v2/comments/1', false, $context);

var_dump($response);
