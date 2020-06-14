<?php
declare(strict_types = 1);

namespace App\Tests\Money;

use App\Money\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->getAmount());

        $product = $five->times(3);
        $this->assertSame(15, $product->getAmount());
    }
}
