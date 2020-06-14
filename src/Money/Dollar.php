<?php
declare(strict_types=1);

namespace App\Money;

class Dollar extends Money
{
    /**
     * @param int $int
     *
     * @return Franc
     */
    final public function times(int $int): Money
    {
        return Money::dollar($this->value * $int);
    }
}
