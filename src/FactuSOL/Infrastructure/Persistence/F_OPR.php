<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_OPR
{
    public const TABLE_NAME = 'F_OPR';

    /** @var string Código */
    public const CODOPR = 'CODOPR';

    /** @var string Fecha de inicio */
    public const FINOPR = 'FINOPR';

    /** @var string Fecha de fin */
    public const FFIOPR = 'FFIOPR';

    /** @var string Artículo */
    public const ARTOPR = 'ARTOPR';

    /** @var string Descripción del artículo */
    public const NAROPR = 'NAROPR';

    /** @var string Precio */
    public const PREOPR = 'PREOPR';

    /** @var string Tipo de cliente */
    public const TCLOPR = 'TCLOPR';
}
