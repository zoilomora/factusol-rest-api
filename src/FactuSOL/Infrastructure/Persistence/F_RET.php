<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_RET
{
    public const TABLE_NAME = 'F_RET';

    /** @var string CODIGO DE RETIRADA */
    public const CODRET = 'F_RET.CODRET';

    /** @var string CODIGO DE CAJA */
    public const CAJRET = 'F_RET.CAJRET';

    /** @var string FECHA DEL MOVIMIENTO */
    public const FECRET = 'F_RET.FECRET';

    /** @var string HORA */
    public const HORRET = 'F_RET.HORRET';

    /** @var string CONCEPTO */
    public const CONRET = 'F_RET.CONRET';

    /** @var string IMPORTE */
    public const IMPRET = 'F_RET.IMPRET';

    /** @var string PROVEEDOR */
    public const PRORET = 'F_RET.PRORET';

    public const TPVIDRET = 'F_RET.TPVIDRET';

    public const CFARET = 'F_RET.CFARET';

    public const PFARET = 'F_RET.PFARET';
}
