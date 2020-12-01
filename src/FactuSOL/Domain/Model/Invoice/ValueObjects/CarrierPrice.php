<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class CarrierPrice extends EnumValueObject
{
    private const PAID = 'PAID';
    private const DUE = 'DUE';

    public static function fromPaid(): self
    {
        return self::from(self::PAID);
    }

    public static function fromDue(): self
    {
        return self::from(self::DUE);
    }

    public function isPaid(): bool
    {
        return $this->equalTo(self::fromPaid());
    }

    public function isDue(): bool
    {
        return $this->equalTo(self::fromDue());
    }
}
