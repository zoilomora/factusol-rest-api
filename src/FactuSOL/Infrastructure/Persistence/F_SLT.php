<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLT
{
    public const TABLE_NAME = 'F_SLT';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const DOCSLT = 'F_SLT.DOCSLT';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const LINSLT = 'F_SLT.LINSLT';

    /** @var string Número de serie */
    public const NSESLT = 'F_SLT.NSESLT';

    /** @var string Fecha de fabricación */
    public const FFASLT = 'F_SLT.FFASLT';

    /** @var string Fecha de consumo preferente */
    public const FCOSLT = 'F_SLT.FCOSLT';

    /** @var string Cantidad */
    public const CANSLT = 'F_SLT.CANSLT';

    public const FECSLT = 'F_SLT.FECSLT';

    public const ALMSLT = 'F_SLT.ALMSLT';

    public const ALDSLT = 'F_SLT.ALDSLT';

    public const ARTSLT = 'F_SLT.ARTSLT';
}
