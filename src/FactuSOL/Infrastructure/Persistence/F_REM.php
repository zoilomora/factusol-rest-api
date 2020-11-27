<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_REM
{
    public const TABLE_NAME = 'F_REM';

    /** @var string Código */
    public const CODREM = 'CODREM';

    /** @var string Fecha de emisión */
    public const FECREM = 'FECREM';

    /** @var string Banco */
    public const BANREM = 'BANREM';

    /** @var string Total */
    public const TOTREM = 'TOTREM';

    /** @var string [L=#0;Pendiente#1;Girada]Estado */
    public const ESTREM = 'ESTREM';

    /** @var string Fecha de cargo */
    public const FCAREM = 'FCAREM';

    /** @var string [L=#No traspasada#1;Traspasada]Traspasada a contabilidad */
    public const TRAREM = 'TRAREM';

    public const CGEREM = 'CGEREM';

    public const TIPREM = 'TIPREM';

    public const UFCREM = 'UFCREM';

    /** @var string Financiada */
    public const FINREM = 'FINREM';
}
