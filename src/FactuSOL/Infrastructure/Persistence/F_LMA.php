<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LMA
{
    public const TABLE_NAME = 'F_LMA';

    /** @var string Código */
    public const CODLMA = 'F_LMA.CODLMA';

    /** @var string [E]Posición */
    public const POSLMA = 'F_LMA.POSLMA';

    /** @var string Artículo */
    public const ARTLMA = 'F_LMA.ARTLMA';

    /** @var string [F=00000]Proveedor */
    public const PROLMA = 'F_LMA.PROLMA';

    /** @var string Letra de la orden */
    public const OFLLMA = 'F_LMA.OFLLMA';

    /** @var string Código de la orden */
    public const OFCLMA = 'F_LMA.OFCLMA';

    /** @var string Subcódigo de la orden */
    public const OFSLMA = 'F_LMA.OFSLMA';

    /** @var string Cantidad */
    public const CANLMA = 'F_LMA.CANLMA';

    /** @var string Unidad de medida */
    public const UNILMA = 'F_LMA.UNILMA';

    /** @var string Precio de costo */
    public const PCOLMA = 'F_LMA.PCOLMA';

    /** @var string Descripción del artículo */
    public const DESLMA = 'F_LMA.DESLMA';
}
