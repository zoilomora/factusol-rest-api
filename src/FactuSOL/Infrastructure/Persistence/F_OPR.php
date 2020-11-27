<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_OPR
{
    public const TABLE_NAME = 'F_OPR';

    /** @var string Código */
    public const CODOPR = 'F_OPR.CODOPR';

    /** @var string Fecha de inicio */
    public const FINOPR = 'F_OPR.FINOPR';

    /** @var string Fecha de fin */
    public const FFIOPR = 'F_OPR.FFIOPR';

    /** @var string Artículo */
    public const ARTOPR = 'F_OPR.ARTOPR';

    /** @var string Descripción del artículo */
    public const NAROPR = 'F_OPR.NAROPR';

    /** @var string Precio */
    public const PREOPR = 'F_OPR.PREOPR';

    /** @var string Tipo de cliente */
    public const TCLOPR = 'F_OPR.TCLOPR';
}
