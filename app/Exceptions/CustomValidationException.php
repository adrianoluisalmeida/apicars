<?php

namespace App\Exceptions;

use Exception;

class CustomValidationException extends Exception
{
    private $details;

    public __construct (string $message, array $details, int $code)
    {
        parent::__construct($message, $code);

        $this->details = $details;
    }

    public function getDetails()
    {
        return $this->details;
    }
}
