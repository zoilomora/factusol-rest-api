<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLP
{
    public const TABLE_NAME = 'F_SLP';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLP = 'TIPSLP';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLP = 'CODSLP';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLP = 'POSSLP';

    /** @var string Número de serie */
    public const NSESLP = 'NSESLP';

    /** @var string Fecha de fabricación */
    public const FFASLP = 'FFASLP';

    /** @var string Fecha de consumo preferente */
    public const FCOSLP = 'FCOSLP';

    /** @var string Cantidad */
    public const CANSLP = 'CANSLP';
}
