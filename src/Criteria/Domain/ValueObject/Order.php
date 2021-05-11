<?php

declare(strict_types=1);

namespace CodelyTv\Criteria\Domain\ValueObject;

final class Order
{
    private OrderBy $orderBy;
    private OrderType $orderType;

    public function __construct(OrderBy $orderBy, OrderType $orderType)
    {
        $this->orderBy   = $orderBy;
        $this->orderType = $orderType;
    }

    public function getOrderBy(): OrderBy
    {
        return $this->orderBy;
    }

    public function getOrderType(): OrderType
    {
        return $this->orderType;
    }
}
