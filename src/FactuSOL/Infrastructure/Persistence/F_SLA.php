<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLA
{
    public const TABLE_NAME = 'F_SLA';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLA = 'TIPSLA';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLA = 'CODSLA';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLA = 'POSSLA';

    /** @var string Número de serie */
    public const NSESLA = 'NSESLA';

    /** @var string Fecha de fabricación */
    public const FFASLA = 'FFASLA';

    /** @var string Fecha de consumo preferente */
    public const FCOSLA = 'FCOSLA';

    /** @var string Cantidad */
    public const CANSLA = 'CANSLA';

    public const FECSLA = 'FECSLA';

    public const ALMSLA = 'ALMSLA';

    public const ARTSLA = 'ARTSLA';
}
