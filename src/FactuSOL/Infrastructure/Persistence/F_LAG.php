<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LAG
{
    public const TABLE_NAME = 'F_LAG';

    /** @var string Agente de la liquidación */
    public const AGELAG = 'AGELAG';

    /** @var string Filtros al obtener la liquidación */
    public const FILLAG = 'FILLAG';

    /** @var string Importe vendido por el agente */
    public const VENLAG = 'VENLAG';

    /** @var string Importe vendido por los agentes de su equipo */
    public const JVELAG = 'JVELAG';

    /** @var string Importe comisionado al agente */
    public const COMLAG = 'COMLAG';

    /** @var string Importe comisionado por los agentes de su equipo */
    public const JCOLAG = 'JCOLAG';

    public const FPGLAG = 'FPGLAG';

    public const OBSLAG = 'OBSLAG';
}
