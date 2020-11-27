<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_HOJ
{
    public const TABLE_NAME = 'F_HOJ';

    /** @var string Nombre */
    public const NOMHOJ = 'NOMHOJ';

    /** @var string Texto */
    public const TEXHOJ = 'TEXHOJ';

    /** @var string [L=#0;Condiciones#1;Presentación]Tipo */
    public const TIPHOJ = 'TIPHOJ';

    /** @var string [E]Margen izquierdo */
    public const MIZHOJ = 'MIZHOJ';

    /** @var string [E]Margen derecho */
    public const MDEHOJ = 'MDEHOJ';

    public const DESHOJ = 'DESHOJ';
}
