<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Family;

use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Id;

interface FamilyRepository
{
    public function findAll(): Families;

    public function findById(Id $id): ?Family;
}
