<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPA
{
    public const TABLE_NAME = 'F_LPA';

    /** @var string Artículo */
    public const ARTLPA = 'ARTLPA';

    /** @var string [F=00000]Proveedor */
    public const PROLPA = 'PROLPA';

    /** @var string Precio */
    public const PRELPA = 'PRELPA';

    /** @var string Descuento 1 */
    public const DT1LPA = 'DT1LPA';

    /** @var string Descuento 2 */
    public const DT2LPA = 'DT2LPA';

    /** @var string Descuento 3 */
    public const DT3LPA = 'DT3LPA';

    /** @var string Resultado */
    public const RESLPA = 'RESLPA';

    /** @var string Referencia */
    public const REFLPA = 'REFLPA';
}
