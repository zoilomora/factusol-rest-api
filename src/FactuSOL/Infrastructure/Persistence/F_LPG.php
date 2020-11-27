<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPG
{
    public const TABLE_NAME = 'F_LPG';

    /** @var string Código */
    public const PAGLPG = 'F_LPG.PAGLPG';

    /** @var string [E]Posición */
    public const POSLPG = 'F_LPG.POSLPG';

    /** @var string Concepto */
    public const CONLPG = 'F_LPG.CONLPG';

    /** @var string Importe */
    public const IMPLPG = 'F_LPG.IMPLPG';
}
