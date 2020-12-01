<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Invoice;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\Line;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\ArticleId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Color;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\CostPrice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Description;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Discount;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Position;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Price;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Quantity;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Size;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\TaxPercentage;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Total;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_LFA;

final class LineBuilder
{
    public function fromArray(array $data): Line
    {
        return new Line(
            Position::from((int) $data[F_LFA::POSLFA]),
            ArticleId::from($data[F_LFA::ARTLFA]),
            Description::from($data[F_LFA::DESLFA]),
            Quantity::from((float) $data[F_LFA::CANLFA]),
            Price::from((float) $data[F_LFA::PRELFA]),
            Total::from((float) $data[F_LFA::TOTLFA]),
            CostPrice::from((float) $data[F_LFA::COSLFA]),
            Discount::from((float) $data[F_LFA::DT1LFA]),
            TaxPercentage::from((int) $data[F_LFA::IVALFA]),
            '' !== $data[F_LFA::CE1LFA]
                ? Size::from($data[F_LFA::CE1LFA])
                : null,
            '' !== $data[F_LFA::CE2LFA]
                ? Color::from($data[F_LFA::CE2LFA])
                : null,
        );
    }
}
