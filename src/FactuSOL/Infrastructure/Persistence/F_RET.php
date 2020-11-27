<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_RET
{
    public const TABLE_NAME = 'F_RET';

    /** @var string CODIGO DE RETIRADA */
    public const CODRET = 'CODRET';

    /** @var string CODIGO DE CAJA */
    public const CAJRET = 'CAJRET';

    /** @var string FECHA DEL MOVIMIENTO */
    public const FECRET = 'FECRET';

    /** @var string HORA */
    public const HORRET = 'HORRET';

    /** @var string CONCEPTO */
    public const CONRET = 'CONRET';

    /** @var string IMPORTE */
    public const IMPRET = 'IMPRET';

    /** @var string PROVEEDOR */
    public const PRORET = 'PRORET';

    public const TPVIDRET = 'TPVIDRET';

    public const CFARET = 'CFARET';

    public const PFARET = 'PFARET';
}
