<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_GAG
{
    public const TABLE_NAME = 'F_GAG';

    /** @var string Código */
    public const CODGAG = 'CODGAG';

    /** @var string [F=00000]Agente */
    public const AGEGAG = 'AGEGAG';

    /** @var string Fecha */
    public const FECGAG = 'FECGAG';

    /** @var string Concepto */
    public const CONGAG = 'CONGAG';

    /** @var string Importe */
    public const IMPGAG = 'IMPGAG';

    /** @var string [E]Código del concepto de gasto del agente */
    public const CCGGAG = 'CCGGAG';

    public const OBSGAG = 'OBSGAG';
}
