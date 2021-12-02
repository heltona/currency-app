<?php 

namespace App\Models\PaymentServices;

use App\Models\Money;

class CreditCardStrategy implements PaymentStrategy
{
    public function calculateRate(Money $money): Money
    {
        return new Money($money->getCurrency(), $money-> getAmount() * 0.0773);
    }
}