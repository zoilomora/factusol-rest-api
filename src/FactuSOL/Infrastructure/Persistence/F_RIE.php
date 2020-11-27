<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_RIE
{
    public const TABLE_NAME = 'F_RIE';

    /** @var string [F=00000]Cliente */
    public const CLIRIE = 'CLIRIE';

    /** @var string Importe */
    public const IMPRIE = 'IMPRIE';

    /** @var string [E]¿Asegurado? */
    public const ASERIE = 'ASERIE';

    /** @var string Nº de póliza */
    public const NPORIE = 'NPORIE';

    /** @var string Fecha de solicitud */
    public const FSORIE = 'FSORIE';

    /** @var string Fecha de concesión */
    public const FCORIE = 'FCORIE';

    /** @var string Fecha de finalización */
    public const FFIRIE = 'FFIRIE';

    public const CONRIE = 'CONRIE';

    public const IMARIE = 'IMARIE';
}
