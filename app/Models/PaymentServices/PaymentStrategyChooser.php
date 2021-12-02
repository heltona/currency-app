<?php 

namespace App\Models\PaymentServices;

use App\Models\PaymentMeans;

class PaymentStrategyChooser
{
    public function chooseStrategy(PaymentMeans $means): PaymentStrategy
    {
        switch($means->getPaymentMeans())
        {
            case "Boleto":
                return new BoletoStrategy();
                break;
            case "Cartão de Crédito":
                return new CreditCardStrategy();
                break;
            default:
                throw new PaymentStrategyException("No strategy available");
        }
    }
}


