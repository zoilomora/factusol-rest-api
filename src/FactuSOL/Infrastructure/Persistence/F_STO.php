<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_STO
{
    public const TABLE_NAME = 'F_STO';

    /** @var string Artículo */
    public const ARTSTO = 'F_STO.ARTSTO';

    /** @var string Almacén */
    public const ALMSTO = 'F_STO.ALMSTO';

    /** @var string Stock mínimo */
    public const MINSTO = 'F_STO.MINSTO';

    /** @var string Stock máximo */
    public const MAXSTO = 'F_STO.MAXSTO';

    /** @var string Stock actual */
    public const ACTSTO = 'F_STO.ACTSTO';

    /** @var string Stock disponible */
    public const DISSTO = 'F_STO.DISSTO';

    public const UBISTO = 'F_STO.UBISTO';
}
