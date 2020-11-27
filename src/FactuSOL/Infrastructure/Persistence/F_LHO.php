<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LHO
{
    public const TABLE_NAME = 'F_LHO';

    /** @var string Codigo */
    public const CODLHO = 'F_LHO.CODLHO';

    /** @var string [E]Posición */
    public const POSLHO = 'F_LHO.POSLHO';

    /** @var string Letra de la obra */
    public const OFLLHO = 'F_LHO.OFLLHO';

    /** @var string Código de la obra */
    public const OFCLHO = 'F_LHO.OFCLHO';

    /** @var string Subcódigo de la obra */
    public const OFSLHO = 'F_LHO.OFSLHO';

    /** @var string Nº de horas */
    public const NHOLHO = 'F_LHO.NHOLHO';

    /** @var string Precio de la hora */
    public const PRELHO = 'F_LHO.PRELHO';

    /** @var string [L=#0;Conforme#1;No conforme]Control de calidad */
    public const CCALHO = 'F_LHO.CCALHO';

    /** @var string Tipo de hora */
    public const THOLHO = 'F_LHO.THOLHO';

    /** @var string Concepto */
    public const CONLHO = 'F_LHO.CONLHO';
}
