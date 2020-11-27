<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_OOB
{
    public const TABLE_NAME = 'F_OOB';

    /** @var string Código */
    public const CODOOB = 'F_OOB.CODOOB';

    /** @var string Artículo */
    public const ARTOOB = 'F_OOB.ARTOOB';

    /** @var string Descripción del artículo */
    public const NAROOB = 'F_OOB.NAROOB';

    /** @var string Precio / Descuento */
    public const PREOOB = 'F_OOB.PREOOB';

    /** @var string [L=#0;Precio fijo#1;Descuento]Tipo */
    public const TOFOOB = 'F_OOB.TOFOOB';
}
