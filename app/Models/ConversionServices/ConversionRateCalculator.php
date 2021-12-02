<?php
namespace App\Models\ConversionServices;

use App\Models\Money;

class ConversionRateCalculator
{
    private $rateChooser;
    
    public function __construct()
    {
        $this->rateChooser = new ConversionRateCalculatorChooser();
    }
    
    public function calculateRate(Money $amount): Money
    {
        return $this->getStrategy($amount)->calculateRate($amount);
    }
        
    private function getStrategy(Money $amount): ConversionRateStrategy
    {
        return $this->rateChooser->chooseStrategy($amount);
        
    }
    
    
}