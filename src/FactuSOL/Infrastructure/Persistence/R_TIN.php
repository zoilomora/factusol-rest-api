<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class R_TIN
{
    public const TABLE_NAME = 'R_TIN';

    /** @var string Código */
    public const CODTIN = 'R_TIN.CODTIN';

    /** @var string Descripción */
    public const DESTIN = 'R_TIN.DESTIN';

    /** @var string [L=#0;No#1;Sí]Cobrar mano de obra */
    public const CMOTIN = 'R_TIN.CMOTIN';

    /** @var string [L=#0;No#1;Sí]Cobrar materiales */
    public const CMATIN = 'R_TIN.CMATIN';

    /** @var string [L=#0;No#1;Sí]Cobrar disposición de servicio */
    public const CDSTIN = 'R_TIN.CDSTIN';
}
