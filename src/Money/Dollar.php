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
     *
     * @return Dollar
     */
    public function times(int $int): Dollar
    {
        return new Dollar($this->amount * $int);
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
