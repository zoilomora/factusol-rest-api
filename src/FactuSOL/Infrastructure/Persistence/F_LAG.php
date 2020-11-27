<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LAG
{
    public const TABLE_NAME = 'F_LAG';

    /** @var string Agente de la liquidación */
    public const AGELAG = 'F_LAG.AGELAG';

    /** @var string Filtros al obtener la liquidación */
    public const FILLAG = 'F_LAG.FILLAG';

    /** @var string Importe vendido por el agente */
    public const VENLAG = 'F_LAG.VENLAG';

    /** @var string Importe vendido por los agentes de su equipo */
    public const JVELAG = 'F_LAG.JVELAG';

    /** @var string Importe comisionado al agente */
    public const COMLAG = 'F_LAG.COMLAG';

    /** @var string Importe comisionado por los agentes de su equipo */
    public const JCOLAG = 'F_LAG.JCOLAG';

    public const FPGLAG = 'F_LAG.FPGLAG';

    public const OBSLAG = 'F_LAG.OBSLAG';
}
