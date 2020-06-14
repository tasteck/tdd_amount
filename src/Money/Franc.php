<?php
declare(strict_types=1);

namespace App\Money;

class Franc extends Money
{
    /**
     * @param int $int
     *
     * @return Franc
     */
    final public function times(int $int): Money
    {
        return Money::franc($this->value * $int);
    }
}
