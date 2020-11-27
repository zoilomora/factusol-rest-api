<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_DES
{
    public const TABLE_NAME = 'F_DES';

    /** @var string Tipo de cliente */
    public const TIPDES = 'TIPDES';

    /** @var string Artículo / familia */
    public const ARFDES = 'ARFDES';

    /** @var string Descripción del artículo / familia */
    public const DESDES = 'DESDES';

    /** @var string [E]No dejar modificar */
    public const FIJDES = 'FIJDES';

    /** @var string Porcentaje */
    public const PORDES = 'PORDES';

    /** @var string [L=#0;Porcentaje#1;Importe]Tipo */
    public const TDEDES = 'TDEDES';

    /** @var string Importe */
    public const IMPDES = 'IMPDES';

    public const TFIDES = 'TFIDES';
}
