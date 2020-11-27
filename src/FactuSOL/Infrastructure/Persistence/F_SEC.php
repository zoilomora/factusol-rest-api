<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_SEC
{
    public const TABLE_NAME = 'F_SEC';

    /** @var string Código */
    public const CODSEC = 'F_SEC.CODSEC';

    /** @var string Descripción */
    public const DESSEC = 'F_SEC.DESSEC';

    /** @var string [E]Permitir subir a internet */
    public const SUWSEC = 'F_SEC.SUWSEC';

    /** @var string [E]Imagen de la sección */
    public const IMASEC = 'F_SEC.IMASEC';

    public const MPTSEC = 'F_SEC.MPTSEC';

    public const ORDSEC = 'F_SEC.ORDSEC';
}
