<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class R_LPA
{
    public const TABLE_NAME = 'R_LPA';

    /** @var string Código de parte */
    public const PARLPA = 'R_LPA.PARLPA';

    /** @var string Posición */
    public const POSLPA = 'R_LPA.POSLPA';

    /** @var string Artículo */
    public const ARTLPA = 'R_LPA.ARTLPA';

    /** @var string Descripción */
    public const DARLPA = 'R_LPA.DARLPA';

    /** @var string Cantidad */
    public const CANLPA = 'R_LPA.CANLPA';

    /** @var string Precio */
    public const PRELPA = 'R_LPA.PRELPA';

    /** @var string Descuento 1 */
    public const DT1LPA = 'R_LPA.DT1LPA';

    /** @var string Descuento 2 */
    public const DT2LPA = 'R_LPA.DT2LPA';

    /** @var string Descuento 3 */
    public const DT3LPA = 'R_LPA.DT3LPA';

    /** @var string Total */
    public const TOTLPA = 'R_LPA.TOTLPA';

    /** @var string Comisión */
    public const COMLPA = 'R_LPA.COMLPA';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Tipo de IVA */
    public const IVALPA = 'R_LPA.IVALPA';

    /** @var string Nº de bultos */
    public const BULLPA = 'R_LPA.BULLPA';

    /** @var string Costo */
    public const COSLPA = 'R_LPA.COSLPA';

    /** @var string Nº de serie */
    public const NSELPA = 'R_LPA.NSELPA';
}
