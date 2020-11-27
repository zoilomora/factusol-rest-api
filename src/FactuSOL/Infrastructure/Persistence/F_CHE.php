<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CHE
{
    public const TABLE_NAME = 'F_CHE';

    /** @var string Código */
    public const CODCHE = 'CODCHE';

    /** @var string Lugar de emisión */
    public const LUGCHE = 'LUGCHE';

    /** @var string Importe */
    public const IMPCHE = 'IMPCHE';

    /** @var string Fecha de emisión */
    public const FEMCHE = 'FEMCHE';

    /** @var string Fecha de vencimiento */
    public const FVECHE = 'FVECHE';

    /** @var string [F=00000]Cliente */
    public const CLICHE = 'CLICHE';

    /** @var string Banco */
    public const BANCHE = 'BANCHE';

    /** @var string Claúsula */
    public const CLACHE = 'CLACHE';

    /** @var string Clave del documento */
    public const CHECHE = 'CHECHE';

    /** @var string Nombre */
    public const CNOCHE = 'CNOCHE';
}
