<?php
namespace App\Models\ConversionServices;

use App\Models\Money;

interface ConversionRateStrategy
{
    public function calculateRate(Money $amount): Money;

}