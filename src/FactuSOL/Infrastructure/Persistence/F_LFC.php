<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFC
{
    public const TABLE_NAME = 'F_LFC';

    /** @var string Código */
    public const CODLFC = 'F_LFC.CODLFC';

    /** @var string [E]Linea de fabricacion */
    public const POSLFC = 'F_LFC.POSLFC';

    /** @var string Artículo */
    public const ARTLFC = 'F_LFC.ARTLFC';

    /** @var string Descripción */
    public const DESLFC = 'F_LFC.DESLFC';

    /** @var string Unidades fabricadas */
    public const CANLFC = 'F_LFC.CANLFC';

    /** @var string Observaciones */
    public const OBSLFC = 'F_LFC.OBSLFC';

    /** @var string Talla */
    public const CE1LFC = 'F_LFC.CE1LFC';

    /** @var string Color */
    public const CE2LFC = 'F_LFC.CE2LFC';
}
