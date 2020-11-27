<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ORE
{
    public const TABLE_NAME = 'F_ORE';

    /** @var string Código */
    public const CODORE = 'F_ORE.CODORE';

    /** @var string Fecha de inicio */
    public const FINORE = 'F_ORE.FINORE';

    /** @var string Fecha de fin */
    public const FFIORE = 'F_ORE.FFIORE';

    /** @var string Artículo */
    public const ARTORE = 'F_ORE.ARTORE';

    /** @var string Descripción del artículo */
    public const NARORE = 'F_ORE.NARORE';

    /** @var string Artículo regalo 1 */
    public const AR1ORE = 'F_ORE.AR1ORE';

    /** @var string Descripción artículo regalo 1 */
    public const NA1ORE = 'F_ORE.NA1ORE';

    /** @var string Artículo regalo 2 */
    public const AR2ORE = 'F_ORE.AR2ORE';

    /** @var string Descripción artículo regalo 2 */
    public const NA2ORE = 'F_ORE.NA2ORE';
}
