<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LHO
{
    public const TABLE_NAME = 'F_LHO';

    /** @var string Codigo */
    public const CODLHO = 'CODLHO';

    /** @var string [E]Posición */
    public const POSLHO = 'POSLHO';

    /** @var string Letra de la obra */
    public const OFLLHO = 'OFLLHO';

    /** @var string Código de la obra */
    public const OFCLHO = 'OFCLHO';

    /** @var string Subcódigo de la obra */
    public const OFSLHO = 'OFSLHO';

    /** @var string Nº de horas */
    public const NHOLHO = 'NHOLHO';

    /** @var string Precio de la hora */
    public const PRELHO = 'PRELHO';

    /** @var string [L=#0;Conforme#1;No conforme]Control de calidad */
    public const CCALHO = 'CCALHO';

    /** @var string Tipo de hora */
    public const THOLHO = 'THOLHO';

    /** @var string Concepto */
    public const CONLHO = 'CONLHO';
}
