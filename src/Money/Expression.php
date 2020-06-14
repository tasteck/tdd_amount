<?php

namespace App\Money;

interface Expression
{
    public function plus(Money $money): Expression;
}