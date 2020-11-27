<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SFL
{
    public const TABLE_NAME = 'F_SFL';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSFL = 'F_SFL.CODSFL';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE FABRICACIÓN */
    public const POSSFL = 'F_SFL.POSSFL';

    /** @var string [E]LINEA DEL COMPONENTE */
    public const LINSFL = 'F_SFL.LINSFL';

    /** @var string Número de serie */
    public const NSESFL = 'F_SFL.NSESFL';

    /** @var string Fecha de fabricación */
    public const FFASFL = 'F_SFL.FFASFL';

    /** @var string Fecha de consumo preferente */
    public const FCOSFL = 'F_SFL.FCOSFL';

    /** @var string Cantidad */
    public const CANSFL = 'F_SFL.CANSFL';

    public const FECSFL = 'F_SFL.FECSFL';

    public const ALMSFL = 'F_SFL.ALMSFL';

    public const ARTSFL = 'F_SFL.ARTSFL';
}
