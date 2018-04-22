<?php use \Doc\helpers\HTML;

HTML::h1('strtolower');

$upperRegistryName = 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. ACCUSAMUS ALIQUID CONSEQUUNTUR CORPORIS 
DEBITIS INVENTORE, IPSAM MAGNAM MAIORES MINUS NUMQUAM QUIBUSDAM SINT TEMPORA TEMPORE! EOS IURE NISI SINT SOLUTA SUSCIPIT VELIT.
ĄĄĄĄĄĄĄĄĄĄĄĄ';

HTML::p(strtolower($upperRegistryName)); // Ą not converted cause does not belong to current locale
