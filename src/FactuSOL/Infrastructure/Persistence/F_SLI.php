<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLI
{
    public const TABLE_NAME = 'F_SLI';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLI = 'F_SLI.CODSLI';

    /** @var string [E]LÍNEA DE DETALLE */
    public const POSSLI = 'F_SLI.POSSLI';

    /** @var string Número de serie */
    public const NSESLI = 'F_SLI.NSESLI';

    /** @var string Fecha de fabricación */
    public const FFASLI = 'F_SLI.FFASLI';

    /** @var string Fecha de consumo preferente */
    public const FCOSLI = 'F_SLI.FCOSLI';

    /** @var string Cantidad */
    public const CANSLI = 'F_SLI.CANSLI';

    public const FECSLI = 'F_SLI.FECSLI';

    public const ALMSLI = 'F_SLI.ALMSLI';

    public const ARTSLI = 'F_SLI.ARTSLI';
}
