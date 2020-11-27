<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SFC
{
    public const TABLE_NAME = 'F_SFC';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSFC = 'CODSFC';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE FABRICACIÓN */
    public const POSSFC = 'POSSFC';

    /** @var string Número de serie */
    public const NSESFC = 'NSESFC';

    /** @var string Fecha de fabricación */
    public const FFASFC = 'FFASFC';

    /** @var string Fecha de consumo preferente */
    public const FCOSFC = 'FCOSFC';

    /** @var string Cantidad */
    public const CANSFC = 'CANSFC';

    public const FECSFC = 'FECSFC';

    public const ALMSFC = 'ALMSFC';

    public const ARTSFC = 'ARTSFC';
}
