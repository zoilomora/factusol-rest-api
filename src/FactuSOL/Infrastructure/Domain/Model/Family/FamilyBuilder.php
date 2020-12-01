<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Family;

use ZoiloMora\FactuSOL\Domain\Model\Family\Family;
use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Description;
use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Id;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_FAM;

final class FamilyBuilder
{
    public function fromArray(array $data): Family
    {
        return new Family(
            Id::from($data[F_FAM::CODFAM]),
            Description::from($data[F_FAM::DESFAM]),
        );
    }
}
