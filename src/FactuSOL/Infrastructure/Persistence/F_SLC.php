<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLC
{
    public const TABLE_NAME = 'F_SLC';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLC = 'TIPSLC';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLC = 'CODSLC';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLC = 'POSSLC';

    /** @var string Número de serie */
    public const NSESLC = 'NSESLC';

    /** @var string Fecha de fabricación */
    public const FFASLC = 'FFASLC';

    /** @var string Fecha de consumo preferente */
    public const FCOSLC = 'FCOSLC';

    /** @var string Cantidad */
    public const CANSLC = 'CANSLC';
}
