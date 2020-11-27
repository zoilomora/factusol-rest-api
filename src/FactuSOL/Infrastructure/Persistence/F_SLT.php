<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLT
{
    public const TABLE_NAME = 'F_SLT';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const DOCSLT = 'DOCSLT';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const LINSLT = 'LINSLT';

    /** @var string Número de serie */
    public const NSESLT = 'NSESLT';

    /** @var string Fecha de fabricación */
    public const FFASLT = 'FFASLT';

    /** @var string Fecha de consumo preferente */
    public const FCOSLT = 'FCOSLT';

    /** @var string Cantidad */
    public const CANSLT = 'CANSLT';

    public const FECSLT = 'FECSLT';

    public const ALMSLT = 'ALMSLT';

    public const ALDSLT = 'ALDSLT';

    public const ARTSLT = 'ARTSLT';
}
