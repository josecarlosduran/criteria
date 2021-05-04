<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\FilterOperator;
use DomainException;
use PHPUnit\Framework\TestCase;

class FilterOperatorTest extends TestCase
{
    /** @test */
    public function itShouldThrownExceptionWhenIsNotAValidOperatorValue(): void
    {
        $this->expectException(DomainException::class);
        new FilterOperator('a');
    }

    /** @test */
    public function itShouldInstantiateAValidFilterOperator(): void
    {
        $value = '==';
        $filterField = new FilterOperator($value);

        self::assertEquals($value, $filterField->getValue());
    }

}
