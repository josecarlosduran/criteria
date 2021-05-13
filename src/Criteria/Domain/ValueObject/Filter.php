<?php

declare(strict_types=1);

namespace CodelyTv\Criteria\Domain\ValueObject;


final class Filter
{
    private FilterField $field;
    private FilterOperator $operator;
    private FilterValue $value;

    public function __construct(FilterField $field, FilterOperator $operator, FilterValue $value)
    {
        $this->field    = $field;
        $this->operator = $operator;
        $this->value    = $value;
    }

    public static function createFromValues(string $field, string $operator, string $value): self
    {
        return new self(new FilterField($field), new FilterOperator($operator), new FilterValue($value));
    }

    public function getField(): FilterField
    {
        return $this->field;
    }

    public function getOperator(): FilterOperator
    {
        return $this->operator;
    }

    public function getValue(): FilterValue
    {
        return $this->value;
    }

    public function serialize(): string
    {
        return sprintf('%s.%s.%s', $this->field->getvalue(), $this->operator->getValue(), $this->value->getValue());
    }
}
