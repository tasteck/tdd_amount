<?php
declare(strict_types=1);

namespace App\Money;

class Franc extends Money
{
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
}
