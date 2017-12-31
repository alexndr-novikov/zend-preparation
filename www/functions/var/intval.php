<?php use \Doc\helpers\HTML;
HTML::h1('intval');


HTML::p(intval('1e3'));
HTML::p(intval('101', 2));
HTML::p(intval('100akjnsd'));
HTML::p(intval(042));
HTML::p(intval('042'));
HTML::p(intval([]));
HTML::p(intval([1,2]));