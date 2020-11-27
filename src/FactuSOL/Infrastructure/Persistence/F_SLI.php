<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLI
{
    public const TABLE_NAME = 'F_SLI';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLI = 'CODSLI';

    /** @var string [E]LÍNEA DE DETALLE */
    public const POSSLI = 'POSSLI';

    /** @var string Número de serie */
    public const NSESLI = 'NSESLI';

    /** @var string Fecha de fabricación */
    public const FFASLI = 'FFASLI';

    /** @var string Fecha de consumo preferente */
    public const FCOSLI = 'FCOSLI';

    /** @var string Cantidad */
    public const CANSLI = 'CANSLI';

    public const FECSLI = 'FECSLI';

    public const ALMSLI = 'ALMSLI';

    public const ARTSLI = 'ARTSLI';
}
