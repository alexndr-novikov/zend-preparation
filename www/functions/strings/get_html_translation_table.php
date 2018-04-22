<?php use \Doc\helpers\HTML;

HTML::h1('get_html_translation_table');

HTML::pre(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
HTML::pre(get_html_translation_table(HTML_SPECIALCHARS, ENT_HTML5));
