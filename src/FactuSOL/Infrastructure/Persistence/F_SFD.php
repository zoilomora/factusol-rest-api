<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SFD
{
    public const TABLE_NAME = 'F_SFD';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSFD = 'CODSFD';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSFD = 'POSSFD';

    /** @var string [E]LÍNEA DE FABRICACIÓN DENTRO DE LA POSICIÓN */
    public const LINSFD = 'LINSFD';

    /** @var string Número de serie */
    public const NSESFD = 'NSESFD';

    /** @var string Fecha de fabricación */
    public const FFASFD = 'FFASFD';

    /** @var string Fecha de consumo preferente */
    public const FCOSFD = 'FCOSFD';

    /** @var string Cantidad */
    public const CANSFD = 'CANSFD';
}
