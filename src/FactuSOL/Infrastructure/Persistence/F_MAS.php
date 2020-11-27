<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_MAS
{
    public const TABLE_NAME = 'F_MAS';

    /** @var string Código (referencia) del mandato */
    public const CODMAS = 'CODMAS';

    /** @var string Descripción del mandato */
    public const DESMAS = 'DESMAS';

    /** @var string Cliente asociado al mandato */
    public const CLIMAS = 'CLIMAS';

    /** @var string Fecha de la firma del mandato */
    public const FECMAS = 'FECMAS';

    /** @var string Tipo de mandato (recurrente o único) */
    public const TIPMAS = 'TIPMAS';

    /** @var string Estado del mandato (Pendiente, en uso, utilizado) */
    public const ESTMAS = 'ESTMAS';

    /** @var string Banco del mandato */
    public const BANMAS = 'BANMAS';
}
