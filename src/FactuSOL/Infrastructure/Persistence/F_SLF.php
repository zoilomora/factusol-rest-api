<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLF
{
    public const TABLE_NAME = 'F_SLF';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLF = 'TIPSLF';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLF = 'CODSLF';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLF = 'POSSLF';

    /** @var string Número de serie */
    public const NSESLF = 'NSESLF';

    /** @var string Fecha de fabricación */
    public const FFASLF = 'FFASLF';

    /** @var string Fecha de consumo preferente */
    public const FCOSLF = 'FCOSLF';

    /** @var string Cantidad */
    public const CANSLF = 'CANSLF';

    public const FECSLF = 'FECSLF';

    public const ALMSLF = 'ALMSLF';

    public const ARTSLF = 'ARTSLF';
}
