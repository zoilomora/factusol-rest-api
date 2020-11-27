<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LSA
{
    public const TABLE_NAME = 'F_LSA';

    /** @var string Código */
    public const CODLSA = 'CODLSA';

    /** @var string [E]Linea de fabricacion */
    public const POSLSA = 'POSLSA';

    /** @var string Artículo */
    public const ARTLSA = 'ARTLSA';

    /** @var string Descripcion */
    public const DESLSA = 'DESLSA';

    /** @var string Unidades fabricadas */
    public const UNILSA = 'UNILSA';

    /** @var string Talla */
    public const CE1LSA = 'CE1LSA';

    /** @var string Color */
    public const CE2LSA = 'CE2LSA';
}
