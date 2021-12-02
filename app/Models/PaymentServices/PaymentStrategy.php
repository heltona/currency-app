<?php 

namespace App\Models\PaymentServices;

use App\Models\Money;

interface PaymentStrategy
{
    public function calculateRate(Money $money): Money;
}