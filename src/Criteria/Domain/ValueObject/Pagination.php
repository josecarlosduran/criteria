<?php


namespace CodelyTv\Criteria\Domain\ValueObject;


class Pagination
{
    private PaginationOffset $paginationOffset;
    private PaginationLimit $paginationLimit;

    private function __construct(PaginationOffset $paginationOffset, PaginationLimit $paginationLimit)
    {
        $this->paginationOffset = $paginationOffset;
        $this->paginationLimit  = $paginationLimit;
    }

    public function createFromValues(int $paginationOffsetValue, int $paginationLimitValue): self
    {
        return new self(new PaginationOffset($paginationOffsetValue), new PaginationLimit($paginationLimitValue));
    }

    public function getPaginationOffset(): PaginationOffset
    {
        return $this->paginationOffset;
    }

    public function getPaginationLimit(): PaginationLimit
    {
        return $this->paginationLimit;
    }


}
