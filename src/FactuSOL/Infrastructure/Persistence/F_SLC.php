<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLC
{
    public const TABLE_NAME = 'F_SLC';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLC = 'F_SLC.TIPSLC';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLC = 'F_SLC.CODSLC';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLC = 'F_SLC.POSSLC';

    /** @var string Número de serie */
    public const NSESLC = 'F_SLC.NSESLC';

    /** @var string Fecha de fabricación */
    public const FFASLC = 'F_SLC.FFASLC';

    /** @var string Fecha de consumo preferente */
    public const FCOSLC = 'F_SLC.FCOSLC';

    /** @var string Cantidad */
    public const CANSLC = 'F_SLC.CANSLC';
}
