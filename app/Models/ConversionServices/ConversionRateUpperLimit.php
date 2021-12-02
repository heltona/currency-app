<?php
namespace App\Models\ConversionServices;

use App\Models\Money;

class ConversionRateUpperLimit implements ConversionRateStrategy
{
    public function calculateRate(Money $amount): Money
    {
        return new Money($amount->getCurrency(), $amount->getAmount() * 0.01);
    }
}