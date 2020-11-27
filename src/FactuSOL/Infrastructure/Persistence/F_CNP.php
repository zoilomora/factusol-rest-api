<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CNP
{
    public const TABLE_NAME = 'F_CNP';

    /** @var string Código */
    public const CODCNP = 'F_CNP.CODCNP';

    /** @var string [L=#0;Cobros#1;Pagos]Tipo de contrapartida */
    public const TIPCNP = 'F_CNP.TIPCNP';

    /** @var string Descripción */
    public const DESCNP = 'F_CNP.DESCNP';

    /** @var string Cuenta contable */
    public const CUECNP = 'F_CNP.CUECNP';

    /** @var string [E]Crear apunte en caja, 0 = no, 1 = si */
    public const CACCNP = 'F_CNP.CACCNP';

    /** @var string [E]Tipo de documento con el que se creará el apunte en caja */
    public const TDOCNP = 'F_CNP.TDOCNP';

    /** @var string [E]Crear apunte a caja al utilizar la contrapartida (0 = No, 1 = Si) */
    public const ACACNP = 'F_CNP.ACACNP';

    /** @var string [E]Efectivo */
    public const EFECNP = 'F_CNP.EFECNP';
}
