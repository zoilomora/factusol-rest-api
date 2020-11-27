<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCA
{
    public const TABLE_NAME = 'F_LCA';

    /** @var string Código */
    public const CAJLCA = 'F_LCA.CAJLCA';

    /** @var string [E]Posición */
    public const POSLCA = 'F_LCA.POSLCA';

    /** @var string Concepto */
    public const CONLCA = 'F_LCA.CONLCA';

    /** @var string Debe */
    public const DEBLCA = 'F_LCA.DEBLCA';

    /** @var string Haber */
    public const HABLCA = 'F_LCA.HABLCA';
}
