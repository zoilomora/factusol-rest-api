<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_HOJ
{
    public const TABLE_NAME = 'F_HOJ';

    /** @var string Nombre */
    public const NOMHOJ = 'F_HOJ.NOMHOJ';

    /** @var string Texto */
    public const TEXHOJ = 'F_HOJ.TEXHOJ';

    /** @var string [L=#0;Condiciones#1;Presentación]Tipo */
    public const TIPHOJ = 'F_HOJ.TIPHOJ';

    /** @var string [E]Margen izquierdo */
    public const MIZHOJ = 'F_HOJ.MIZHOJ';

    /** @var string [E]Margen derecho */
    public const MDEHOJ = 'F_HOJ.MDEHOJ';

    public const DESHOJ = 'F_HOJ.DESHOJ';
}
