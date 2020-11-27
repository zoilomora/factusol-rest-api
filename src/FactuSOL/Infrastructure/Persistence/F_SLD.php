<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLD
{
    public const TABLE_NAME = 'F_SLD';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLD = 'F_SLD.TIPSLD';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLD = 'F_SLD.CODSLD';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLD = 'F_SLD.POSSLD';

    /** @var string Número de serie */
    public const NSESLD = 'F_SLD.NSESLD';

    /** @var string Fecha de fabricación */
    public const FFASLD = 'F_SLD.FFASLD';

    /** @var string Fecha de consumo preferente */
    public const FCOSLD = 'F_SLD.FCOSLD';

    /** @var string Cantidad */
    public const CANSLD = 'F_SLD.CANSLD';

    public const FECSLD = 'F_SLD.FECSLD';

    public const ALMSLD = 'F_SLD.ALMSLD';

    public const ARTSLD = 'F_SLD.ARTSLD';
}
