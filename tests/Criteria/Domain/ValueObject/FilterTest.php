<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\Filter;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{
    /** @test  */
    public function shouldCreateAFilter(): void
    {
        $field = 'test-1';
        $operator = '==';
        $value = 'value';

        $filter = Filter::createFromValues($field, $operator, $value);

        self::assertEquals($field, $filter->getField()->getValue());
        self::assertEquals($operator, $filter->getOperator()->getValue());
        self::assertEquals($value, $filter->getValue()->getValue());
    }
}
