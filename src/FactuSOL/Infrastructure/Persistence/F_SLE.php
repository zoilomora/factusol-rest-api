<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLE
{
    public const TABLE_NAME = 'F_SLE';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLE = 'F_SLE.TIPSLE';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLE = 'F_SLE.CODSLE';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLE = 'F_SLE.POSSLE';

    /** @var string Número de serie */
    public const NSESLE = 'F_SLE.NSESLE';

    /** @var string Fecha de fabricación */
    public const FFASLE = 'F_SLE.FFASLE';

    /** @var string Fecha de consumo preferente */
    public const FCOSLE = 'F_SLE.FCOSLE';

    /** @var string Cantidad */
    public const CANSLE = 'F_SLE.CANSLE';

    public const FECSLE = 'F_SLE.FECSLE';

    public const ALMSLE = 'F_SLE.ALMSLE';

    public const ARTSLE = 'F_SLE.ARTSLE';
}
