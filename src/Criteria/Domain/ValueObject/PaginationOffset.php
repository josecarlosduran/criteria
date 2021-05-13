<?php

declare(strict_types=1);

namespace CodelyTv\Criteria\Domain\ValueObject;

use DomainException;

final class PaginationOffset
{
    private int $value;

    public function __construct(int $value)
    {
        $this->ensureIsAPositiveNumber($value);
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    private function ensureIsAPositiveNumber(int $value): void
    {
        if ($value < 0) {
            throw new DomainException(sprintf('A pagination offset can´t be a negative number, you pass %d', $value));
        }
    }
}
