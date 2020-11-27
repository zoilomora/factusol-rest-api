<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ACL
{
    public const TABLE_NAME = 'F_ACL';

    /** @var string Código */
    public const CODACL = 'F_ACL.CODACL';

    /** @var string [F=00000]Cliente */
    public const CLIACL = 'F_ACL.CLIACL';

    /** @var string Fecha */
    public const FECACL = 'F_ACL.FECACL';

    /** @var string [F=hh:mm]Hora */
    public const HORACL = 'F_ACL.HORACL';

    /** @var string [F=00000]Agente */
    public const OPEACL = 'F_ACL.OPEACL';

    /** @var string [E]Campaña */
    public const CAMACL = 'F_ACL.CAMACL';

    /** @var string [L=#0;Pendiente#1;En curso#2;Finalizada]Estado */
    public const ESTACL = 'F_ACL.ESTACL';

    /** @var string Tipo de acción */
    public const ACOACL = 'F_ACL.ACOACL';

    /** @var string Consulta */
    public const SEGACL = 'F_ACL.SEGACL';

    /** @var string Persona de contacto */
    public const PCOACL = 'F_ACL.PCOACL';

    /** @var string Fecha del fin de la acción */
    public const FFIACL = 'F_ACL.FFIACL';

    /** @var string [F=hh:mm]Hora del fin de la acción */
    public const HFIACL = 'F_ACL.HFIACL';
}
