<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\FilterField;
use DomainException;
use PHPUnit\Framework\TestCase;

class FilterFieldTest extends TestCase
{
    /** @test */
    public function itShouldThrownExceptionWhenEmptyField(): void
    {
        $this->expectException(DomainException::class);
        new FilterField('');
    }

    /** @test */
    public function itShouldInstantiateAValidFilterField(): void
    {
        $value = 'test-field';
        $filterField = new FilterField($value);

        self::assertEquals($value, $filterField->getValue());

    }


}
