<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_RIE
{
    public const TABLE_NAME = 'F_RIE';

    /** @var string [F=00000]Cliente */
    public const CLIRIE = 'F_RIE.CLIRIE';

    /** @var string Importe */
    public const IMPRIE = 'F_RIE.IMPRIE';

    /** @var string [E]¿Asegurado? */
    public const ASERIE = 'F_RIE.ASERIE';

    /** @var string Nº de póliza */
    public const NPORIE = 'F_RIE.NPORIE';

    /** @var string Fecha de solicitud */
    public const FSORIE = 'F_RIE.FSORIE';

    /** @var string Fecha de concesión */
    public const FCORIE = 'F_RIE.FCORIE';

    /** @var string Fecha de finalización */
    public const FFIRIE = 'F_RIE.FFIRIE';

    public const CONRIE = 'F_RIE.CONRIE';

    public const IMARIE = 'F_RIE.IMARIE';
}
