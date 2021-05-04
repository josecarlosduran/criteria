<?php


namespace CodelyTv\Criteria\Domain\ValueObject;


class FilterValue
{
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
