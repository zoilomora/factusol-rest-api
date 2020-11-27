<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_MAS
{
    public const TABLE_NAME = 'F_MAS';

    /** @var string Código (referencia) del mandato */
    public const CODMAS = 'F_MAS.CODMAS';

    /** @var string Descripción del mandato */
    public const DESMAS = 'F_MAS.DESMAS';

    /** @var string Cliente asociado al mandato */
    public const CLIMAS = 'F_MAS.CLIMAS';

    /** @var string Fecha de la firma del mandato */
    public const FECMAS = 'F_MAS.FECMAS';

    /** @var string Tipo de mandato (recurrente o único) */
    public const TIPMAS = 'F_MAS.TIPMAS';

    /** @var string Estado del mandato (Pendiente, en uso, utilizado) */
    public const ESTMAS = 'F_MAS.ESTMAS';

    /** @var string Banco del mandato */
    public const BANMAS = 'F_MAS.BANMAS';
}
