<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLV
{
    public const TABLE_NAME = 'F_SLV';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLV = 'F_SLV.TIPSLV';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLV = 'F_SLV.CODSLV';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLV = 'F_SLV.POSSLV';

    /** @var string Número de serie */
    public const NSESLV = 'F_SLV.NSESLV';

    /** @var string Fecha de fabricación */
    public const FFASLV = 'F_SLV.FFASLV';

    /** @var string Fecha de consumo preferente */
    public const FCOSLV = 'F_SLV.FCOSLV';

    /** @var string Cantidad */
    public const CANSLV = 'F_SLV.CANSLV';
}
