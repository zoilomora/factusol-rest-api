<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLR
{
    public const TABLE_NAME = 'F_SLR';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLR = 'F_SLR.TIPSLR';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLR = 'F_SLR.CODSLR';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLR = 'F_SLR.POSSLR';

    /** @var string Número de serie */
    public const NSESLR = 'F_SLR.NSESLR';

    /** @var string Fecha de fabricación */
    public const FFASLR = 'F_SLR.FFASLR';

    /** @var string Fecha de consumo preferente */
    public const FCOSLR = 'F_SLR.FCOSLR';

    /** @var string Cantidad */
    public const CANSLR = 'F_SLR.CANSLR';

    public const FECSLR = 'F_SLR.FECSLR';

    public const ALMSLR = 'F_SLR.ALMSLR';

    public const ARTSLR = 'F_SLR.ARTSLR';
}
