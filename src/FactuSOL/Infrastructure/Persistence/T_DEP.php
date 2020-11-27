<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class T_DEP
{
    public const TABLE_NAME = 'T_DEP';

    public const CODDEP = 'CODDEP';

    public const NOMDEP = 'NOMDEP';

    public const PERDEP = 'PERDEP';

    /** @var string [E]Imagen del dependiente */
    public const IMADEP = 'IMADEP';

    public const CLADEP = 'CLADEP';

    public const CCLDEP = 'CCLDEP';

    /** @var string Estado del dependiente (0 - Inactivo, 1 - Activo) */
    public const ESTDEP = 'ESTDEP';

    public const AGEDEP = 'AGEDEP';

    /** @var string Idioma del dependiente (0=Sin seleccionar, 1 = Castellano, 2 = Catalán) */
    public const IDIDEP = 'IDIDEP';
}
