<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLR
{
    public const TABLE_NAME = 'F_SLR';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLR = 'TIPSLR';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLR = 'CODSLR';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLR = 'POSSLR';

    /** @var string Número de serie */
    public const NSESLR = 'NSESLR';

    /** @var string Fecha de fabricación */
    public const FFASLR = 'FFASLR';

    /** @var string Fecha de consumo preferente */
    public const FCOSLR = 'FCOSLR';

    /** @var string Cantidad */
    public const CANSLR = 'CANSLR';

    public const FECSLR = 'FECSLR';

    public const ALMSLR = 'ALMSLR';

    public const ARTSLR = 'ARTSLR';
}
