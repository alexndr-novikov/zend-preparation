<?php use \Doc\helpers\HTML;

HTML::h1('str_shuffle');
HTML::p(str_shuffle('str_shuffle'));
srand(12345);
HTML::p(str_shuffle('str_shuffle'));
HTML::p(str_shuffle('str_shuffle'));
srand(12345);
HTML::p(str_shuffle('str_shuffle')); // <= always same results after srand
HTML::p(str_shuffle('str_shuffle'));
