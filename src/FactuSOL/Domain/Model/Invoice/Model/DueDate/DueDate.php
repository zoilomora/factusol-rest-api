<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\DueDate;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\DueDate\ValueObject\Amount;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\DueDate\ValueObject\Date;

final class DueDate implements \JsonSerializable
{
    private Date $date;
    private Amount $amount;

    public function __construct(Date $date, Amount $amount)
    {
        $this->date = $date;
        $this->amount = $amount;
    }

    public function date(): Date
    {
        return $this->date;
    }

    public function amount(): Amount
    {
        return $this->amount;
    }

    public function jsonSerialize(): array
    {
        return [
            'date' => $this->date,
            'amount' => $this->amount,
        ];
    }
}
