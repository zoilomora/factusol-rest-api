<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLB
{
    public const TABLE_NAME = 'F_SLB';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLB = 'F_SLB.TIPSLB';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLB = 'F_SLB.CODSLB';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLB = 'F_SLB.POSSLB';

    /** @var string Número de serie */
    public const NSESLB = 'F_SLB.NSESLB';

    /** @var string Fecha de fabricación */
    public const FFASLB = 'F_SLB.FFASLB';

    /** @var string Fecha de consumo preferente */
    public const FCOSLB = 'F_SLB.FCOSLB';

    /** @var string Cantidad */
    public const CANSLB = 'F_SLB.CANSLB';

    public const FECSLB = 'F_SLB.FECSLB';

    public const ALMSLB = 'F_SLB.ALMSLB';

    public const ARTSLB = 'F_SLB.ARTSLB';
}
