<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ODE
{
    public const TABLE_NAME = 'F_ODE';

    /** @var string Código */
    public const CODODE = 'F_ODE.CODODE';

    /** @var string Fecha de inicio */
    public const FINODE = 'F_ODE.FINODE';

    /** @var string Fecha de fin */
    public const FFIODE = 'F_ODE.FFIODE';

    /** @var string Artículo */
    public const ARTODE = 'F_ODE.ARTODE';

    /** @var string Descripción del artículo */
    public const NARODE = 'F_ODE.NARODE';

    /** @var string Descuento */
    public const DESODE = 'F_ODE.DESODE';

    public const TFIODE = 'F_ODE.TFIODE';

    public const CE1ODE = 'F_ODE.CE1ODE';

    public const CE2ODE = 'F_ODE.CE2ODE';
}
