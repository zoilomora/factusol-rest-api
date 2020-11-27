<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain;

use PcComponentes\TopicGenerator\Service;

final class ServiceName extends Service
{
    private const NAME = 'factusol';

    public function name(): string
    {
        return self::NAME;
    }
}
