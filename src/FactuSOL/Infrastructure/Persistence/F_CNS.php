<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CNS
{
    public const TABLE_NAME = 'F_CNS';

    /** @var string Almacén */
    public const ALMCNS = 'F_CNS.ALMCNS';

    /** @var string Fecha */
    public const FECCNS = 'F_CNS.FECCNS';

    /** @var string Artículo */
    public const ARTCNS = 'F_CNS.ARTCNS';

    /** @var string [E]NUMERO DE LOTE/SERIE */
    public const NSECNS = 'F_CNS.NSECNS';

    /** @var string [E]FECHA DE FABRICACIÓN */
    public const FFACNS = 'F_CNS.FFACNS';

    /** @var string [E]FECHA DE CONSUMO PREFERENTE */
    public const FCOCNS = 'F_CNS.FCOCNS';

    /** @var string Unidades */
    public const CANCNS = 'F_CNS.CANCNS';
}
