<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_STO
{
    public const TABLE_NAME = 'F_STO';

    /** @var string Artículo */
    public const ARTSTO = 'ARTSTO';

    /** @var string Almacén */
    public const ALMSTO = 'ALMSTO';

    /** @var string Stock mínimo */
    public const MINSTO = 'MINSTO';

    /** @var string Stock máximo */
    public const MAXSTO = 'MAXSTO';

    /** @var string Stock actual */
    public const ACTSTO = 'ACTSTO';

    /** @var string Stock disponible */
    public const DISSTO = 'DISSTO';

    public const UBISTO = 'UBISTO';
}
