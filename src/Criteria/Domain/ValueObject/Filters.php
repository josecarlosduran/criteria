<?php
declare(strict_types=1);

namespace CodelyTv\Criteria\Domain\ValueObject;


final class Filters
{
    private array $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function add (Filter $filter) : void
    {
        $this->items[] = $filter;
    }


    public function getItems(): array
    {
        return $this->items;
    }





}
