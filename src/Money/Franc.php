<?php
declare(strict_types=1);

namespace App\Money;

class Franc
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $int
     *
     * @return Franc
     */
    final public function times(int $int): Franc
    {
        return new Franc($this->value * $int);
    }

    /**
     * @return int
     */
    final public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param Franc $dollar
     *
     * @return bool
     */
    final public function equals(Franc $dollar): bool
    {
        return $this->value === $dollar->getValue();
    }
}
