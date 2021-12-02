<?php
namespace App\Models\ConversionServices;

use App\Models\Money;

class ConversionRateCalculatorChooser
{
    public function chooseStrategy(Money $amount): ConversionRateStrategy
    {
        $other = new Money($amount->getCurrency(), 2700);
        
        //@todo this didn't bring any clarity at all; refactor it
        if($amount->compare($other) == -1)
        {
            return new ConversionRateDownLimit();
        }
        
        $other = new Money($amount->getCurrency(), 4000);
        
        if($amount->compare($other) == 1)
        {
            return new ConversionRateUpperLimit();
        }
        
        return new ConversionRateNoFee();
    }
}