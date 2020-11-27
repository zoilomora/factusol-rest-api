<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CAF
{
    public const TABLE_NAME = 'F_CAF';

    /** @var string Agente */
    public const AGECAF = 'F_CAF.AGECAF';

    /** @var string [L=#0;Artículo#1;Familia]Tipo de descuento */
    public const TIPCAF = 'F_CAF.TIPCAF';

    /** @var string Artículo/familia */
    public const CODCAF = 'F_CAF.CODCAF';

    /** @var string Comisión */
    public const COMCAF = 'F_CAF.COMCAF';

    public const TCOCAF = 'F_CAF.TCOCAF';
}
