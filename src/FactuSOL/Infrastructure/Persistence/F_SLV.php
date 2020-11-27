<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLV
{
    public const TABLE_NAME = 'F_SLV';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLV = 'TIPSLV';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLV = 'CODSLV';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLV = 'POSSLV';

    /** @var string Número de serie */
    public const NSESLV = 'NSESLV';

    /** @var string Fecha de fabricación */
    public const FFASLV = 'FFASLV';

    /** @var string Fecha de consumo preferente */
    public const FCOSLV = 'FCOSLV';

    /** @var string Cantidad */
    public const CANSLV = 'CANSLV';
}
