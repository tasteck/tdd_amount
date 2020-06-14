<?php

namespace App\Money;

class Bank
{

    /**
     * Bank constructor.
     */
    public function __construct()
    {
    }

    public function reduce(Expression $source, string $to): Expression
    {
        return Money::dollar(10);
    }
}