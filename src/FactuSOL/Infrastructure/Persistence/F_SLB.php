<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLB
{
    public const TABLE_NAME = 'F_SLB';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLB = 'TIPSLB';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLB = 'CODSLB';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLB = 'POSSLB';

    /** @var string Número de serie */
    public const NSESLB = 'NSESLB';

    /** @var string Fecha de fabricación */
    public const FFASLB = 'FFASLB';

    /** @var string Fecha de consumo preferente */
    public const FCOSLB = 'FCOSLB';

    /** @var string Cantidad */
    public const CANSLB = 'CANSLB';

    public const FECSLB = 'FECSLB';

    public const ALMSLB = 'ALMSLB';

    public const ARTSLB = 'ARTSLB';
}
