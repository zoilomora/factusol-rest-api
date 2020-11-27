<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class T_DEP
{
    public const TABLE_NAME = 'T_DEP';

    public const CODDEP = 'T_DEP.CODDEP';

    public const NOMDEP = 'T_DEP.NOMDEP';

    public const PERDEP = 'T_DEP.PERDEP';

    /** @var string [E]Imagen del dependiente */
    public const IMADEP = 'T_DEP.IMADEP';

    public const CLADEP = 'T_DEP.CLADEP';

    public const CCLDEP = 'T_DEP.CCLDEP';

    /** @var string Estado del dependiente (0 - Inactivo, 1 - Activo) */
    public const ESTDEP = 'T_DEP.ESTDEP';

    public const AGEDEP = 'T_DEP.AGEDEP';

    /** @var string Idioma del dependiente (0=Sin seleccionar, 1 = Castellano, 2 = Catalán) */
    public const IDIDEP = 'T_DEP.IDIDEP';
}
