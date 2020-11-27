<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_STC
{
    public const TABLE_NAME = 'F_STC';

    /** @var string Artículo */
    public const ARTSTC = 'ARTSTC';

    /** @var string Almacén */
    public const ALMSTC = 'ALMSTC';

    /** @var string Talla */
    public const CE1STC = 'CE1STC';

    /** @var string Color */
    public const CE2STC = 'CE2STC';

    /** @var string Stock mínimo */
    public const MINSTC = 'MINSTC';

    /** @var string Stock máximo */
    public const MAXSTC = 'MAXSTC';

    /** @var string Stock actual */
    public const ACTSTC = 'ACTSTC';

    /** @var string Stock disponible */
    public const DISSTC = 'DISSTC';
}
