<?php
declare(strict_types=1);

namespace App\Money;

abstract class Money
{
    protected $value;

    /**
     * @param int $amount
     *
     * @return Dollar
     */
    final public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    /**
     * @param int $int
     *
     * @return Money
     */
    abstract public function times(int $int): Money;

    /**
     * @param int $amount
     *
     * @return Franc
     */
    final public static function franc(int $amount): Franc
    {
        return new Franc($amount);
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
