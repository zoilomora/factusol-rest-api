<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Tax;

use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Id;

interface TaxRepository
{
    public function findAll(): Taxes;

    public function findById(Id $id): ?Tax;
}
