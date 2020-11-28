<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Customer;

use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\Id;

interface CustomerRepository
{
    public function findAll(): Customers;

    public function findById(Id $id): ?Customer;
}
