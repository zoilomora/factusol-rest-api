<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLF
{
    public const TABLE_NAME = 'F_SLF';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLF = 'F_SLF.TIPSLF';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLF = 'F_SLF.CODSLF';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLF = 'F_SLF.POSSLF';

    /** @var string Número de serie */
    public const NSESLF = 'F_SLF.NSESLF';

    /** @var string Fecha de fabricación */
    public const FFASLF = 'F_SLF.FFASLF';

    /** @var string Fecha de consumo preferente */
    public const FCOSLF = 'F_SLF.FCOSLF';

    /** @var string Cantidad */
    public const CANSLF = 'F_SLF.CANSLF';

    public const FECSLF = 'F_SLF.FECSLF';

    public const ALMSLF = 'F_SLF.ALMSLF';

    public const ARTSLF = 'F_SLF.ARTSLF';
}
