<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    /** @test */
    public function shouldCreateAValidOrderAsc(): void
    {
        $value = 'test-field';

        $order = Order::createAsc($value);

        self::assertEquals($value, $order->getOrderBy()->getValue());
        self::assertEquals('asc', $order->getOrderType()->getValue());
    }

    /** @test */
    public function shouldCreateAValidOrderDesc(): void
    {
        $value = 'test-field';

        $order = Order::createDesc($value);

        self::assertEquals($value, $order->getOrderBy()->getValue());
        self::assertEquals('desc', $order->getOrderType()->getValue());
    }
}
