<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LRU
{
    public const TABLE_NAME = 'F_LRU';

    /** @var string Código */
    public const CODLRU = 'F_LRU.CODLRU';

    /** @var string [E]Posición */
    public const POSLRU = 'F_LRU.POSLRU';

    /** @var string [F=00000]Cliente */
    public const CLILRU = 'F_LRU.CLILRU';

    public const OBRLRU = 'F_LRU.OBRLRU';
}
