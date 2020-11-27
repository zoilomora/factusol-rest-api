<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFM
{
    public const TABLE_NAME = 'F_LFM';

    /** @var string Código */
    public const CODLFM = 'F_LFM.CODLFM';

    /** @var string [E]POSICION DE LA LÍNEA DE FABRICACIÓN DE MANO DE OBRA */
    public const POSLFM = 'F_LFM.POSLFM';

    /** @var string Nº de horas */
    public const HORLFM = 'F_LFM.HORLFM';

    /** @var string Concepto */
    public const CONLFM = 'F_LFM.CONLFM';

    /** @var string Tipo de hora */
    public const THOLFM = 'F_LFM.THOLFM';

    /** @var string Precio de la hora */
    public const PRELFM = 'F_LFM.PRELFM';

    /** @var string [E]CÓDIGO DE LA FABRICACIÓN ENLAZADA */
    public const FABLFM = 'F_LFM.FABLFM';

    /** @var string [E]LINEA DEL FABRICADO DE LA ORDEN */
    public const LINLFM = 'F_LFM.LINLFM';
}
