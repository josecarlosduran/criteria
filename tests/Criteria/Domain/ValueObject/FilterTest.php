<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\Filter;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
{
    /** @test  */
    public function shouldCreateAFilter(): void
    {
        $field    = 'test-1';
        $operator = '==';
        $value    = 'value';

        $serializedValue = $field . '.' . $operator . '.' . $value;

        $filter = Filter::createFromValues($field, $operator, $value);

        self::assertEquals($serializedValue, $filter->serialize());
    }
}
