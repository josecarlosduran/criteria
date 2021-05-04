<?php
declare(strict_types=1);

namespace CodelyTv\Criteria\Domain\ValueObject;


use DomainException;

final class FilterOperator
{
    const VALID_VALUES = [
        '==',
        '>',
        '>=',
        '<=',
        '!='
    ];

    private string $value;

    public function __construct(string $value)
    {
        $this->ensureValueIsValid($value);
        $this->value = $value;
    }


    public function getValue(): string
    {
        return $this->value;
    }

    private function ensureValueIsValid(string $value): void
    {
        if (!in_array($value, self::VALID_VALUES))
        {
            throw new DomainException(sprintf('FilterOperator cannot be %s', $value));
        }

    }


}
