<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_TAR
{
    public const TABLE_NAME = 'F_TAR';

    /** @var string Código */
    public const CODTAR = 'F_TAR.CODTAR';

    /** @var string Descripción */
    public const DESTAR = 'F_TAR.DESTAR';

    /** @var string Margen */
    public const MARTAR = 'F_TAR.MARTAR';

    /** @var string [E]Incluir impuesto */
    public const IVATAR = 'F_TAR.IVATAR';
}
