<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ACL
{
    public const TABLE_NAME = 'F_ACL';

    /** @var string Código */
    public const CODACL = 'CODACL';

    /** @var string [F=00000]Cliente */
    public const CLIACL = 'CLIACL';

    /** @var string Fecha */
    public const FECACL = 'FECACL';

    /** @var string [F=hh:mm]Hora */
    public const HORACL = 'HORACL';

    /** @var string [F=00000]Agente */
    public const OPEACL = 'OPEACL';

    /** @var string [E]Campaña */
    public const CAMACL = 'CAMACL';

    /** @var string [L=#0;Pendiente#1;En curso#2;Finalizada]Estado */
    public const ESTACL = 'ESTACL';

    /** @var string Tipo de acción */
    public const ACOACL = 'ACOACL';

    /** @var string Consulta */
    public const SEGACL = 'SEGACL';

    /** @var string Persona de contacto */
    public const PCOACL = 'PCOACL';

    /** @var string Fecha del fin de la acción */
    public const FFIACL = 'FFIACL';

    /** @var string [F=hh:mm]Hora del fin de la acción */
    public const HFIACL = 'HFIACL';
}
