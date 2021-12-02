<?php
namespace App\Models\ConversionServices;

use App\Models\Money;
use Illuminate\Support\Facades\Http;

class ExchangeRateService
{
    /**
     * @todo just a proof of concept; refactor it
     * @param Money $from
     * @param Money $to
     * @return Money
     */
    public function convert(Money $from, Money $to): Money
    {
        return new Money($to->getCurrency(), $from->getAmount() / $this->getExchangeRateOfDay($from, $to));
    }
    
    
    public function getExchangeRateOfDay(Money $from, Money $to):float
    {
        $toConvert = $to->getCurrency() . '-' . $from->getCurrency();
        $api = "https://economia.awesomeapi.com.br/json/last/" . $toConvert;
        
        $response = Http::get($api)->json();
        $value = $response[$to->getCurrency() . $from->getCurrency()]['high'];
        
        
        return $value;
    }
}