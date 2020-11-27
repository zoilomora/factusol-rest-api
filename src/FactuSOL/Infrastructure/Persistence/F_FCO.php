<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FCO
{
    public const TABLE_NAME = 'F_FCO';

    /** @var string Código */
    public const CODFCO = 'CODFCO';

    /** @var string Fecha */
    public const FECFCO = 'FECFCO';

    /** @var string Almacén */
    public const ALMFCO = 'ALMFCO';

    /** @var string [L=#0;Pte.#;Fabricada]Estado */
    public const ESTFCO = 'ESTFCO';

    public const OBSFCO = 'OBSFCO';
}
