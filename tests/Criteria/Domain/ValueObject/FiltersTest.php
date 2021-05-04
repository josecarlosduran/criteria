<?php

namespace CodelyTv\Tests\Criteria\Domain\ValueObject;

use CodelyTv\Criteria\Domain\ValueObject\Filter;
use CodelyTv\Criteria\Domain\ValueObject\Filters;
use PHPUnit\Framework\TestCase;

class FiltersTest extends TestCase
{
    /** @test  */
    public function shouldCreateAFilter(): void
    {

        $filterValues = [
            [
                'field' => 'test-1',
                'operator' => '==',
                'value' => 'value'
            ],
            [
                'field' => 'test-2',
                'operator' => '!=',
                'value' => 'value2'
            ]
        ];

        $filters = new Filters();
        foreach ($filterValues as $filterValue)
        {
            $filters->add(Filter::createFromPrimitives($filterValue['field'], $filterValue['operator'], $filterValue['value']));
        }

        $pos = 0;
        foreach ($filters->getItems() as $filter)
        {
            self::assertEquals($filterValues[$pos]['field'], $filter->getField()->getValue());
            self::assertEquals($filterValues[$pos]['operator'], $filter->getOperator()->getValue());
            self::assertEquals($filterValues[$pos]['value'], $filter->getValue()->getValue());
            $pos++;
        }
    }

}
