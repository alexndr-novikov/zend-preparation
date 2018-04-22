<?php use \Doc\helpers\HTML;

HTML::h1('strtoupper');


$upperRegistryName = 'lorem ipsum dolor sit amet, consectetur adipisicing elit. accusamus aliquid consequuntur corporis 
debitis inventore, ipsam magnam maiores minus numquam quibusdam sint tempora tempore! eos iure nisi sint soluta suscipit velit.
ąąąąąąąąąąąą';

HTML::p(strtoupper($upperRegistryName)); // ą is not converted cause does not belong to current locale
