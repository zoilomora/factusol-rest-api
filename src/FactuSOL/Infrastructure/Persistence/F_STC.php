<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_STC
{
    public const TABLE_NAME = 'F_STC';

    /** @var string Artículo */
    public const ARTSTC = 'F_STC.ARTSTC';

    /** @var string Almacén */
    public const ALMSTC = 'F_STC.ALMSTC';

    /** @var string Talla */
    public const CE1STC = 'F_STC.CE1STC';

    /** @var string Color */
    public const CE2STC = 'F_STC.CE2STC';

    /** @var string Stock mínimo */
    public const MINSTC = 'F_STC.MINSTC';

    /** @var string Stock máximo */
    public const MAXSTC = 'F_STC.MAXSTC';

    /** @var string Stock actual */
    public const ACTSTC = 'F_STC.ACTSTC';

    /** @var string Stock disponible */
    public const DISSTC = 'F_STC.DISSTC';
}
