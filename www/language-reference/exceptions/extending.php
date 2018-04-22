<?php

namespace exceptionCustomZone;

use \Doc\helpers\HTML;

HTML::h1('Extending exceptions');


class CustomException extends \Exception
{
    protected $additionalParam;

    public function __construct($message, $additionalParam, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->additionalParam = $additionalParam;
    }

    public function __toString()
    {
        return __CLASS__;
    }

    public function getAdditionalParam()
    {
        return $this->additionalParam;
    }
}

$exception = new CustomException('Some mesage', 'param pam pam');
HTML::tag('p', $exception->getAdditionalParam());
HTML::tag('p', $exception);

try {
    throw $exception;
} catch (CustomException $e) {
    HTML::tag('p', $e->getMessage());
}
