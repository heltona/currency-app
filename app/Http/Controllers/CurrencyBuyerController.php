<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\PaymentMeans;
use App\Models\ConversionServices\ConversionRateCalculator;
use App\Models\ConversionServices\ExchangeRateService;

class CurrencyBuyerController
{

    //@todo too much code; refactor it
    public function buyCurrency(Request $req)
    {
        $origin = new Money('BRL', $req->get("amount"));
        $target = new Money($req->get("target-currency"), 0);
        $payment = new PaymentMeans($req->get("payment-means"));

        $rateAmountForPaymentMeans = $payment->calculateRate($origin);

        $conversionRateHelper = new ConversionRateCalculator();
        
        $rateAmountForConversion = $conversionRateHelper->calculateRate($origin);
        
        $remainer = $origin->minus($rateAmountForPaymentMeans->plus($rateAmountForConversion));
        
        $exchange = new ExchangeRateService();
        $valueInCurrencyTarget = $exchange->convert($remainer  , $target); 
        $currentCurrencyValue = $exchange->getExchangeRateOfDay($origin, $target);

      

        return view('acquisition-result', [
            'origin' => $origin,
            'target' => $valueInCurrencyTarget,
            'payment' => $payment, 
            'currencyValue' => $currentCurrencyValue,
            'paymentFees' => $rateAmountForPaymentMeans,
            'conversionFees' => $rateAmountForConversion,
            'amountMinusFees' => $remainer
            
        ]);
    }
}