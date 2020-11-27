<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CNS
{
    public const TABLE_NAME = 'F_CNS';

    /** @var string Almacén */
    public const ALMCNS = 'ALMCNS';

    /** @var string Fecha */
    public const FECCNS = 'FECCNS';

    /** @var string Artículo */
    public const ARTCNS = 'ARTCNS';

    /** @var string [E]NUMERO DE LOTE/SERIE */
    public const NSECNS = 'NSECNS';

    /** @var string [E]FECHA DE FABRICACIÓN */
    public const FFACNS = 'FFACNS';

    /** @var string [E]FECHA DE CONSUMO PREFERENTE */
    public const FCOCNS = 'FCOCNS';

    /** @var string Unidades */
    public const CANCNS = 'CANCNS';
}
