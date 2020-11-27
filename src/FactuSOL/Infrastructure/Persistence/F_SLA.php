<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLA
{
    public const TABLE_NAME = 'F_SLA';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLA = 'F_SLA.TIPSLA';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLA = 'F_SLA.CODSLA';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLA = 'F_SLA.POSSLA';

    /** @var string Número de serie */
    public const NSESLA = 'F_SLA.NSESLA';

    /** @var string Fecha de fabricación */
    public const FFASLA = 'F_SLA.FFASLA';

    /** @var string Fecha de consumo preferente */
    public const FCOSLA = 'F_SLA.FCOSLA';

    /** @var string Cantidad */
    public const CANSLA = 'F_SLA.CANSLA';

    public const FECSLA = 'F_SLA.FECSLA';

    public const ALMSLA = 'F_SLA.ALMSLA';

    public const ARTSLA = 'F_SLA.ARTSLA';
}
