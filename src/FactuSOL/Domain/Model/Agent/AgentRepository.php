<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Agent;

use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Id;

interface AgentRepository
{
    public function findAll(): Agents;

    public function findById(Id $id): ?Agent;
}
