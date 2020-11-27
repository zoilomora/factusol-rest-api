<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SLP
{
    public const TABLE_NAME = 'F_SLP';

    /** @var string [E]TIPO DEL DOCUMENTO ORIGEN */
    public const TIPSLP = 'F_SLP.TIPSLP';

    /** @var string [E]CODIGO DEL DOCUMENTO ORIGEN */
    public const CODSLP = 'F_SLP.CODSLP';

    /** @var string [E]POSICION DENTRO DE LAS LÍNEAS DE DETALLE */
    public const POSSLP = 'F_SLP.POSSLP';

    /** @var string Número de serie */
    public const NSESLP = 'F_SLP.NSESLP';

    /** @var string Fecha de fabricación */
    public const FFASLP = 'F_SLP.FFASLP';

    /** @var string Fecha de consumo preferente */
    public const FCOSLP = 'F_SLP.FCOSLP';

    /** @var string Cantidad */
    public const CANSLP = 'F_SLP.CANSLP';
}
