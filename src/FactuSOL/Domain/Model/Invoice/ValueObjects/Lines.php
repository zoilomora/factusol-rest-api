<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects;

use PcComponentes\Ddd\Domain\Model\ValueObject\CollectionValueObject;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\Line;

final class Lines extends CollectionValueObject
{
    public static function from(array $items)
    {
        \uasort(
            $items,
            static fn (Line $a, Line $b) => $a->position()->value() > $b->position()->value(),
        );

        return parent::from($items);
    }
}
