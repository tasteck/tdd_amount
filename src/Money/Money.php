<?php
declare(strict_types=1);

namespace App\Money;

class Money
{
    protected $value;

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
