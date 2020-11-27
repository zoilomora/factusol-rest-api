<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SFL
{
    public const TABLE_NAME = 'F_SFL';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSFL = 'CODSFL';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE FABRICACIÓN */
    public const POSSFL = 'POSSFL';

    /** @var string [E]LINEA DEL COMPONENTE */
    public const LINSFL = 'LINSFL';

    /** @var string Número de serie */
    public const NSESFL = 'NSESFL';

    /** @var string Fecha de fabricación */
    public const FFASFL = 'FFASFL';

    /** @var string Fecha de consumo preferente */
    public const FCOSFL = 'FCOSFL';

    /** @var string Cantidad */
    public const CANSFL = 'CANSFL';

    public const FECSFL = 'FECSFL';

    public const ALMSFL = 'ALMSFL';

    public const ARTSFL = 'ARTSFL';
}
