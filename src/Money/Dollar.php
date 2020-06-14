<?php
declare(strict_types=1);

namespace App\Money;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $int
     */
    public function times(int $int)
    {
        $this->amount *= $int;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
