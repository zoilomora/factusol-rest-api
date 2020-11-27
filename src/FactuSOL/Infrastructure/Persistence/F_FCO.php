<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FCO
{
    public const TABLE_NAME = 'F_FCO';

    /** @var string Código */
    public const CODFCO = 'F_FCO.CODFCO';

    /** @var string Fecha */
    public const FECFCO = 'F_FCO.FECFCO';

    /** @var string Almacén */
    public const ALMFCO = 'F_FCO.ALMFCO';

    /** @var string [L=#0;Pte.#;Fabricada]Estado */
    public const ESTFCO = 'F_FCO.ESTFCO';

    public const OBSFCO = 'F_FCO.OBSFCO';
}
