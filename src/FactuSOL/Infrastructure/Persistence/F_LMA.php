<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LMA
{
    public const TABLE_NAME = 'F_LMA';

    /** @var string Código */
    public const CODLMA = 'CODLMA';

    /** @var string [E]Posición */
    public const POSLMA = 'POSLMA';

    /** @var string Artículo */
    public const ARTLMA = 'ARTLMA';

    /** @var string [F=00000]Proveedor */
    public const PROLMA = 'PROLMA';

    /** @var string Letra de la orden */
    public const OFLLMA = 'OFLLMA';

    /** @var string Código de la orden */
    public const OFCLMA = 'OFCLMA';

    /** @var string Subcódigo de la orden */
    public const OFSLMA = 'OFSLMA';

    /** @var string Cantidad */
    public const CANLMA = 'CANLMA';

    /** @var string Unidad de medida */
    public const UNILMA = 'UNILMA';

    /** @var string Precio de costo */
    public const PCOLMA = 'PCOLMA';

    /** @var string Descripción del artículo */
    public const DESLMA = 'DESLMA';
}
