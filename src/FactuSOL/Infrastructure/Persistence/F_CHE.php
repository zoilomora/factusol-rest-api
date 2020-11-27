<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CHE
{
    public const TABLE_NAME = 'F_CHE';

    /** @var string Código */
    public const CODCHE = 'F_CHE.CODCHE';

    /** @var string Lugar de emisión */
    public const LUGCHE = 'F_CHE.LUGCHE';

    /** @var string Importe */
    public const IMPCHE = 'F_CHE.IMPCHE';

    /** @var string Fecha de emisión */
    public const FEMCHE = 'F_CHE.FEMCHE';

    /** @var string Fecha de vencimiento */
    public const FVECHE = 'F_CHE.FVECHE';

    /** @var string [F=00000]Cliente */
    public const CLICHE = 'F_CHE.CLICHE';

    /** @var string Banco */
    public const BANCHE = 'F_CHE.BANCHE';

    /** @var string Claúsula */
    public const CLACHE = 'F_CHE.CLACHE';

    /** @var string Clave del documento */
    public const CHECHE = 'F_CHE.CHECHE';

    /** @var string Nombre */
    public const CNOCHE = 'F_CHE.CNOCHE';
}
