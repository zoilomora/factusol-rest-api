<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class R_LPA
{
    public const TABLE_NAME = 'R_LPA';

    /** @var string Código de parte */
    public const PARLPA = 'PARLPA';

    /** @var string Posición */
    public const POSLPA = 'POSLPA';

    /** @var string Artículo */
    public const ARTLPA = 'ARTLPA';

    /** @var string Descripción */
    public const DARLPA = 'DARLPA';

    /** @var string Cantidad */
    public const CANLPA = 'CANLPA';

    /** @var string Precio */
    public const PRELPA = 'PRELPA';

    /** @var string Descuento 1 */
    public const DT1LPA = 'DT1LPA';

    /** @var string Descuento 2 */
    public const DT2LPA = 'DT2LPA';

    /** @var string Descuento 3 */
    public const DT3LPA = 'DT3LPA';

    /** @var string Total */
    public const TOTLPA = 'TOTLPA';

    /** @var string Comisión */
    public const COMLPA = 'COMLPA';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Tipo de IVA */
    public const IVALPA = 'IVALPA';

    /** @var string Nº de bultos */
    public const BULLPA = 'BULLPA';

    /** @var string Costo */
    public const COSLPA = 'COSLPA';

    /** @var string Nº de serie */
    public const NSELPA = 'NSELPA';
}
