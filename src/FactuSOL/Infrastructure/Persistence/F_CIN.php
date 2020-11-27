<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CIN
{
    public const TABLE_NAME = 'F_CIN';

    /** @var string Almacén */
    public const ALMCIN = 'F_CIN.ALMCIN';

    /** @var string Fecha */
    public const FECCIN = 'F_CIN.FECCIN';

    /** @var string Artículo */
    public const ARTCIN = 'F_CIN.ARTCIN';

    /** @var string Talla */
    public const CE1CIN = 'F_CIN.CE1CIN';

    /** @var string Color */
    public const CE2CIN = 'F_CIN.CE2CIN';

    /** @var string Stock actual */
    public const UACCIN = 'F_CIN.UACCIN';

    /** @var string Unidades contadas */
    public const URECIN = 'F_CIN.URECIN';

    /** @var string [E]Disponible antes de la consolidación */
    public const DACCIN = 'F_CIN.DACCIN';

    /** @var string [E]Disponible consolidado */
    public const DRECIN = 'F_CIN.DRECIN';
}
