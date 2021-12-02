<?php
namespace App\Models;

use App\Models\PaymentServices\PaymentStrategyChooser;
use App\Models\PaymentServices\PaymentStrategy;

class PaymentMeans
{

    private $paymentMeans;

    private $strategyChooser;

    public function __construct(string $payment)
    {
        $this->paymentMeans = $payment;
        $this->strategyChooser = new PaymentStrategyChooser();
    }

    public function calculateRate(Money $money): Money
    {
        return $this->getPaymentStrategy()->calculateRate($money);
    }

    private function getPaymentStrategy(): PaymentStrategy
    {
        return $this->strategyChooser->chooseStrategy($this);
    }

    /**
     *
     * @return string
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }
}


