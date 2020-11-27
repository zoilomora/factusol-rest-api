<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_GAG
{
    public const TABLE_NAME = 'F_GAG';

    /** @var string Código */
    public const CODGAG = 'F_GAG.CODGAG';

    /** @var string [F=00000]Agente */
    public const AGEGAG = 'F_GAG.AGEGAG';

    /** @var string Fecha */
    public const FECGAG = 'F_GAG.FECGAG';

    /** @var string Concepto */
    public const CONGAG = 'F_GAG.CONGAG';

    /** @var string Importe */
    public const IMPGAG = 'F_GAG.IMPGAG';

    /** @var string [E]Código del concepto de gasto del agente */
    public const CCGGAG = 'F_GAG.CCGGAG';

    public const OBSGAG = 'F_GAG.OBSGAG';
}
