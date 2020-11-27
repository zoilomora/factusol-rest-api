<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PRC
{
    public const TABLE_NAME = 'F_PRC';

    /** @var string [F=00000]Cliente */
    public const CLIPRC = 'CLIPRC';

    /** @var string Artículo */
    public const ARTPRC = 'ARTPRC';

    /** @var string Precio/Descuento */
    public const PREPRC = 'PREPRC';

    /** @var string [L=#0;Importe de venta#1;% Descuento]Tipo */
    public const TIPPRC = 'TIPPRC';

    /** @var string [L=#0;Artículo#1;Familia]Aplicar descuento sobre artículo o familia */
    public const AOFPRC = 'AOFPRC';
}
