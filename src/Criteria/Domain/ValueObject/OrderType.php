<?php

declare(strict_types=1);

namespace CodelyTv\Criteria\Domain\ValueObject;

final class OrderType
{
    private const ORDER_DESC = 'desc';
    private const ORDER_ASC = 'asc';
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function desc(): self
    {
        return new self(self::ORDER_DESC);
    }

    public static function asc(): self
    {
        return new self(self::ORDER_ASC);
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
