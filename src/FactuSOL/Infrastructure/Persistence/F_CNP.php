<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CNP
{
    public const TABLE_NAME = 'F_CNP';

    /** @var string Código */
    public const CODCNP = 'CODCNP';

    /** @var string [L=#0;Cobros#1;Pagos]Tipo de contrapartida */
    public const TIPCNP = 'TIPCNP';

    /** @var string Descripción */
    public const DESCNP = 'DESCNP';

    /** @var string Cuenta contable */
    public const CUECNP = 'CUECNP';

    /** @var string [E]Crear apunte en caja, 0 = no, 1 = si */
    public const CACCNP = 'CACCNP';

    /** @var string [E]Tipo de documento con el que se creará el apunte en caja */
    public const TDOCNP = 'TDOCNP';

    /** @var string [E]Crear apunte a caja al utilizar la contrapartida (0 = No, 1 = Si) */
    public const ACACNP = 'ACACNP';

    /** @var string [E]Efectivo */
    public const EFECNP = 'EFECNP';
}
