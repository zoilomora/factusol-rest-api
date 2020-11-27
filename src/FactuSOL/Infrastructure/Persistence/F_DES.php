<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_DES
{
    public const TABLE_NAME = 'F_DES';

    /** @var string Tipo de cliente */
    public const TIPDES = 'F_DES.TIPDES';

    /** @var string Artículo / familia */
    public const ARFDES = 'F_DES.ARFDES';

    /** @var string Descripción del artículo / familia */
    public const DESDES = 'F_DES.DESDES';

    /** @var string [E]No dejar modificar */
    public const FIJDES = 'F_DES.FIJDES';

    /** @var string Porcentaje */
    public const PORDES = 'F_DES.PORDES';

    /** @var string [L=#0;Porcentaje#1;Importe]Tipo */
    public const TDEDES = 'F_DES.TDEDES';

    /** @var string Importe */
    public const IMPDES = 'F_DES.IMPDES';

    public const TFIDES = 'F_DES.TFIDES';
}
