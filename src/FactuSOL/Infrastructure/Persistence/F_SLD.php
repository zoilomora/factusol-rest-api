<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLD
{
    public const TABLE_NAME = 'F_SLD';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLD = 'TIPSLD';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLD = 'CODSLD';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLD = 'POSSLD';

    /** @var string Número de serie */
    public const NSESLD = 'NSESLD';

    /** @var string Fecha de fabricación */
    public const FFASLD = 'FFASLD';

    /** @var string Fecha de consumo preferente */
    public const FCOSLD = 'FCOSLD';

    /** @var string Cantidad */
    public const CANSLD = 'CANSLD';

    public const FECSLD = 'FECSLD';

    public const ALMSLD = 'ALMSLD';

    public const ARTSLD = 'ARTSLD';
}
