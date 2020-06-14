<?php
declare(strict_types=1);

namespace App\Money;

class Money implements Expression
{
    /** @var int  */
    protected $value;

    /** @var string  */
    protected $currency;

    public function __construct(int $value, string $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * @param int $amount
     *
     * @return Money
     */
    final public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    /**
     * @param int $amount
     *
     * @return Money
     */
    final public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    /**
     * @param int $int
     *
     * @return Money
     */
    final public function times(int $int): Money
    {
        return new Money($this->value * $int, $this->currency);
    }

    /**
     * @return string
     */
    final public function currency(): string
    {
        return $this->currency;
    }

    final public function equals(Money $money): bool
    {
        return $this->value === $money->getValue()
            && $this->currency() === $money->currency();
    }

    /**
     * @return int
     */
    final public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param Money $money
     *
     * @return Expression
     */
    final public function plus(Money $money): Expression
    {
        return new Money($this->value + $money->value, $this->currency);
    }
}
