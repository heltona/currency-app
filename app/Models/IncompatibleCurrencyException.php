<?php
namespace App\Models;

use Exception;

class IncompatibleCurrencyException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}

