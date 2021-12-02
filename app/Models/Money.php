<?php
namespace App\Models;

class Money
{

    private $currency;

    private $amount;

    public function __construct(string $currency, float $amount)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }

    /**
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    public function plus(Money $other): Money
    {
        $this->assertCurrency($other);

        return new Money($this->currency, $this->amount + $other->getAmount());
    }

    public function minus(Money $other): Money
    {
        $this->assertCurrency($other);
        
        return new Money($this->currency, $this->amount - $other->getAmount());
    }

    public function assertCurrency(Money $other)
    {
        if ($this->currency != $other->getCurrency())
            throw new IncompatibleCurrencyException();
    }

    public function compare(Money $other)
    {
        if ($this->amount == $other->getAmount()) {
            return 0;
        }

        if ($this->amount > $other->getAmount()) {
            return 1;
        }

        return - 1;
    }
}

