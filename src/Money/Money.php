<?php
declare(strict_types=1);

namespace App\Money;

abstract class Money
{
    protected $value;

    /**
     * @var string
     */
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
        return new Dollar($amount, 'USD');
    }

    /**
     * @param int $amount
     *
     * @return Money
     */
    final public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }

    /**
     * @param int $int
     *
     * @return Money
     */
    abstract public function times(int $int): Money;

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
            && get_class($this) === get_class($money);
    }

    /**
     * @return int
     */
    final public function getValue(): int
    {
        return $this->value;
    }
}
