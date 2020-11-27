<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ING
{
    public const TABLE_NAME = 'F_ING';

    /** @var string CODIGO DE INGRESO */
    public const CODING = 'F_ING.CODING';

    /** @var string CODIGO DE CAJA */
    public const CAJING = 'F_ING.CAJING';

    /** @var string FECHA DEL MOVIMIENTO */
    public const FECING = 'F_ING.FECING';

    /** @var string HORA */
    public const HORING = 'F_ING.HORING';

    /** @var string CONCEPTO */
    public const CONING = 'F_ING.CONING';

    /** @var string IMPORTE */
    public const IMPING = 'F_ING.IMPING';

    /** @var string CLIENTE */
    public const CLIING = 'F_ING.CLIING';

    public const TPVIDING = 'F_ING.TPVIDING';

    public const CFAING = 'F_ING.CFAING';

    public const PFAING = 'F_ING.PFAING';
}
