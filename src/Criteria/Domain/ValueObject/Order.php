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

    public static function createDesc(string $orderByValue): self
    {
        return new self(new OrderBy($orderByValue), OrderType::desc());
    }

    public static function createAsc(string $orderByValue): self
    {
        return new self(new OrderBy($orderByValue), OrderType::asc());
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
