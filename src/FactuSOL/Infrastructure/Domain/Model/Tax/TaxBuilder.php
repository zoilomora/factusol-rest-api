<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Tax;

use ZoiloMora\FactuSOL\Domain\Model\Tax\Tax;
use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Value;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CFG;

final class TaxBuilder
{
    public function fromArray(array $data): Tax
    {
        $id = \substr($data[F_CFG::CODCFG], -1);

        return new Tax(
            Id::from((int) $id),
            Value::from((int) $data[F_CFG::NUMCFG]),
        );
    }
}
