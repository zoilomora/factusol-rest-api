<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SFD
{
    public const TABLE_NAME = 'F_SFD';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSFD = 'F_SFD.CODSFD';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSFD = 'F_SFD.POSSFD';

    /** @var string [E]LÍNEA DE FABRICACIÓN DENTRO DE LA POSICIÓN */
    public const LINSFD = 'F_SFD.LINSFD';

    /** @var string Número de serie */
    public const NSESFD = 'F_SFD.NSESFD';

    /** @var string Fecha de fabricación */
    public const FFASFD = 'F_SFD.FFASFD';

    /** @var string Fecha de consumo preferente */
    public const FCOSFD = 'F_SFD.FCOSFD';

    /** @var string Cantidad */
    public const CANSFD = 'F_SFD.CANSFD';
}
