<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_REM
{
    public const TABLE_NAME = 'F_REM';

    /** @var string Código */
    public const CODREM = 'F_REM.CODREM';

    /** @var string Fecha de emisión */
    public const FECREM = 'F_REM.FECREM';

    /** @var string Banco */
    public const BANREM = 'F_REM.BANREM';

    /** @var string Total */
    public const TOTREM = 'F_REM.TOTREM';

    /** @var string [L=#0;Pendiente#1;Girada]Estado */
    public const ESTREM = 'F_REM.ESTREM';

    /** @var string Fecha de cargo */
    public const FCAREM = 'F_REM.FCAREM';

    /** @var string [L=#No traspasada#1;Traspasada]Traspasada a contabilidad */
    public const TRAREM = 'F_REM.TRAREM';

    public const CGEREM = 'F_REM.CGEREM';

    public const TIPREM = 'F_REM.TIPREM';

    public const UFCREM = 'F_REM.UFCREM';

    /** @var string Financiada */
    public const FINREM = 'F_REM.FINREM';
}
