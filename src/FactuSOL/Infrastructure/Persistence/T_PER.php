<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class T_PER
{
    public const TABLE_NAME = 'T_PER';

    /** @var string Código del perfil de acceso */
    public const CODPER = 'T_PER.CODPER';

    /** @var string Descripción del perfil de acceso */
    public const DESPER = 'T_PER.DESPER';

    /** @var string Cadena de permisos */
    public const CADPER = 'T_PER.CADPER';
}
