<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LSA
{
    public const TABLE_NAME = 'F_LSA';

    /** @var string Código */
    public const CODLSA = 'F_LSA.CODLSA';

    /** @var string [E]Linea de fabricacion */
    public const POSLSA = 'F_LSA.POSLSA';

    /** @var string Artículo */
    public const ARTLSA = 'F_LSA.ARTLSA';

    /** @var string Descripcion */
    public const DESLSA = 'F_LSA.DESLSA';

    /** @var string Unidades fabricadas */
    public const UNILSA = 'F_LSA.UNILSA';

    /** @var string Talla */
    public const CE1LSA = 'F_LSA.CE1LSA';

    /** @var string Color */
    public const CE2LSA = 'F_LSA.CE2LSA';
}
