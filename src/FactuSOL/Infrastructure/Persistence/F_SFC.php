<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SFC
{
    public const TABLE_NAME = 'F_SFC';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSFC = 'F_SFC.CODSFC';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE FABRICACIÓN */
    public const POSSFC = 'F_SFC.POSSFC';

    /** @var string Número de serie */
    public const NSESFC = 'F_SFC.NSESFC';

    /** @var string Fecha de fabricación */
    public const FFASFC = 'F_SFC.FFASFC';

    /** @var string Fecha de consumo preferente */
    public const FCOSFC = 'F_SFC.FCOSFC';

    /** @var string Cantidad */
    public const CANSFC = 'F_SFC.CANSFC';

    public const FECSFC = 'F_SFC.FECSFC';

    public const ALMSFC = 'F_SFC.ALMSFC';

    public const ARTSFC = 'F_SFC.ARTSFC';
}
