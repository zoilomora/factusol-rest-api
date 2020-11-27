<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CAJ
{
    public const TABLE_NAME = 'F_CAJ';

    /** @var string Código */
    public const NUMCAJ = 'F_CAJ.NUMCAJ';

    /** @var string Fecha */
    public const FECCAJ = 'F_CAJ.FECCAJ';

    /** @var string Caja */
    public const CAJCAJ = 'F_CAJ.CAJCAJ';

    /** @var string Seleccionar Documento Al Crear Nuevo Ticket (1 Si - 0 No) */
    public const USNCAJ = 'F_CAJ.USNCAJ';
}
