<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCA
{
    public const TABLE_NAME = 'F_LCA';

    /** @var string Código */
    public const CAJLCA = 'CAJLCA';

    /** @var string [E]Posición */
    public const POSLCA = 'POSLCA';

    /** @var string Concepto */
    public const CONLCA = 'CONLCA';

    /** @var string Debe */
    public const DEBLCA = 'DEBLCA';

    /** @var string Haber */
    public const HABLCA = 'HABLCA';
}
