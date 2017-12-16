<?php use \Doc\helpers\HTML;
HTML::h1('get_declared_classes');

HTML::pre(get_declared_classes());

use Doc\models\RootCategory;
new RootCategory('', '');
HTML::pre(get_declared_classes());
