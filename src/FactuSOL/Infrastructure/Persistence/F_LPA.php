<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPA
{
    public const TABLE_NAME = 'F_LPA';

    /** @var string Artículo */
    public const ARTLPA = 'F_LPA.ARTLPA';

    /** @var string [F=00000]Proveedor */
    public const PROLPA = 'F_LPA.PROLPA';

    /** @var string Precio */
    public const PRELPA = 'F_LPA.PRELPA';

    /** @var string Descuento 1 */
    public const DT1LPA = 'F_LPA.DT1LPA';

    /** @var string Descuento 2 */
    public const DT2LPA = 'F_LPA.DT2LPA';

    /** @var string Descuento 3 */
    public const DT3LPA = 'F_LPA.DT3LPA';

    /** @var string Resultado */
    public const RESLPA = 'F_LPA.RESLPA';

    /** @var string Referencia */
    public const REFLPA = 'F_LPA.REFLPA';
}
