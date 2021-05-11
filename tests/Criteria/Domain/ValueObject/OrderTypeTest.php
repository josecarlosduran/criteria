<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\OrderType;
use PHPUnit\Framework\TestCase;

class OrderTypeTest extends TestCase
{
    /** @test */
    public function shouldCreateADescOrderType(): void
    {
        $orderType = OrderType::desc();
        self::assertEquals('desc', $orderType->getValue());
    }

    /** @test */
    public function shouldCreateAAscOrderType(): void
    {
        $orderType = OrderType::asc();
        self::assertEquals('asc', $orderType->getValue());
    }
}
