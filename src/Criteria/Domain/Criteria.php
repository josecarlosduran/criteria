<?php

declare(strict_types=1);

namespace CodelyTv\Criteria\Domain;

use CodelyTv\Criteria\Domain\ValueObject\Filters;
use CodelyTv\Criteria\Domain\ValueObject\Order;
use CodelyTv\Criteria\Domain\ValueObject\Pagination;

final class Criteria
{
    private Filters $filters;
    private ?Order $order;
    private Pagination $pagination;

    public function __construct(Filters $filters, ?Order $order, Pagination $pagination)
    {
        $this->filters    = $filters;
        $this->order      = $order;
        $this->pagination = $pagination;
    }


}
