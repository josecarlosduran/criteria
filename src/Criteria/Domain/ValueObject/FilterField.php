<?php


namespace CodelyTv\Criteria\Domain\ValueObject;


use DomainException;

class FilterField
{
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
        if ($value === '') {
            throw new DomainException('FilterField cannot be a empty string');
        }
    }


}
