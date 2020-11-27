<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CIN
{
    public const TABLE_NAME = 'F_CIN';

    /** @var string Almacén */
    public const ALMCIN = 'ALMCIN';

    /** @var string Fecha */
    public const FECCIN = 'FECCIN';

    /** @var string Artículo */
    public const ARTCIN = 'ARTCIN';

    /** @var string Talla */
    public const CE1CIN = 'CE1CIN';

    /** @var string Color */
    public const CE2CIN = 'CE2CIN';

    /** @var string Stock actual */
    public const UACCIN = 'UACCIN';

    /** @var string Unidades contadas */
    public const URECIN = 'URECIN';

    /** @var string [E]Disponible antes de la consolidación */
    public const DACCIN = 'DACCIN';

    /** @var string [E]Disponible consolidado */
    public const DRECIN = 'DRECIN';
}
