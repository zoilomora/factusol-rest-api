<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLE
{
    public const TABLE_NAME = 'F_SLE';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLE = 'TIPSLE';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLE = 'CODSLE';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLE = 'POSSLE';

    /** @var string Número de serie */
    public const NSESLE = 'NSESLE';

    /** @var string Fecha de fabricación */
    public const FFASLE = 'FFASLE';

    /** @var string Fecha de consumo preferente */
    public const FCOSLE = 'FCOSLE';

    /** @var string Cantidad */
    public const CANSLE = 'CANSLE';

    public const FECSLE = 'FECSLE';

    public const ALMSLE = 'ALMSLE';

    public const ARTSLE = 'ARTSLE';
}
