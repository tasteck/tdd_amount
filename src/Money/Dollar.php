<?php
declare(strict_types=1);

namespace App\Money;

class Dollar extends Money
{
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $int
     *
     * @return Dollar
     */
    final public function times(int $int): Money
    {
        return new Dollar($this->value * $int);
    }
}
