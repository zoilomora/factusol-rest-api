<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CAF
{
    public const TABLE_NAME = 'F_CAF';

    /** @var string Agente */
    public const AGECAF = 'AGECAF';

    /** @var string [L=#0;Artículo#1;Familia]Tipo de descuento */
    public const TIPCAF = 'TIPCAF';

    /** @var string Artículo/familia */
    public const CODCAF = 'CODCAF';

    /** @var string Comisión */
    public const COMCAF = 'COMCAF';

    public const TCOCAF = 'TCOCAF';
}
