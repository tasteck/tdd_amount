<?php
declare(strict_types=1);

namespace App\Money;

class Dollar
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $int
     *
     * @return Dollar
     */
    final public function times(int $int): Dollar
    {
        return new Dollar($this->value * $int);
    }

    /**
     * @return int
     */
    final public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param Dollar $dollar
     *
     * @return bool
     */
    final public function equals(Dollar $dollar): bool
    {
        return $this->value === $dollar->getValue();
    }
}
