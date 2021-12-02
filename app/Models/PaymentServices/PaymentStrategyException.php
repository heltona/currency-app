<?php 

namespace App\Models\PaymentServices;

use Exception;

class PaymentStrategyException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}