<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Id;

interface InvoiceRepository
{
    public function findAll(): Invoices;

    public function findById(Id $id): ?Invoice;
}
