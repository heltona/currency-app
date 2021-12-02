<?php
namespace App\Models\ConversionServices;

use App\Models\Money;

class ConversionRateNoFee implements ConversionRateStrategy
{
    public function calculateRate(Money $amount): Money
    {
        return new Money($amount->getCurrency(), 0);
    }
}