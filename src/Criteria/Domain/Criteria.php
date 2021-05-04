<?php
declare(strict_types=1);

namespace CodelyTv\Criteria\Domain;


use CodelyTv\Criteria\Domain\ValueObject\Filters;

final class Criteria
{
    private Filters $filters;
    private ?Orders $orders;
    private Pagination $pagination;

    public function __construct(Filters $filters, ?Orders $orders, Pagination $pagination)
    {
        $this->filters = $filters;
        $this->orders = $orders;
        $this->pagination = $pagination;
    }

}
