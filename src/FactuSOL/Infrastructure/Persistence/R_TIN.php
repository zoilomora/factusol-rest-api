<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class R_TIN
{
    public const TABLE_NAME = 'R_TIN';

    /** @var string Código */
    public const CODTIN = 'CODTIN';

    /** @var string Descripción */
    public const DESTIN = 'DESTIN';

    /** @var string [L=#0;No#1;Sí]Cobrar mano de obra */
    public const CMOTIN = 'CMOTIN';

    /** @var string [L=#0;No#1;Sí]Cobrar materiales */
    public const CMATIN = 'CMATIN';

    /** @var string [L=#0;No#1;Sí]Cobrar disposición de servicio */
    public const CDSTIN = 'CDSTIN';
}
