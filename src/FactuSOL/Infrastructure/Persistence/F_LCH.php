<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCH
{
    public const TABLE_NAME = 'F_LCH';

    /** @var string Código */
    public const CHELCH = 'F_LCH.CHELCH';

    /** @var string [E]Posición */
    public const POSLCH = 'F_LCH.POSLCH';

    /** @var string Concepto */
    public const CONLCH = 'F_LCH.CONLCH';

    /** @var string Importe */
    public const IMPLCH = 'F_LCH.IMPLCH';
}
