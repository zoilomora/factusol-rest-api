<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFM
{
    public const TABLE_NAME = 'F_LFM';

    /** @var string Código */
    public const CODLFM = 'CODLFM';

    /** @var string [E]POSICION DE LA LÍNEA DE FABRICACIÓN DE MANO DE OBRA */
    public const POSLFM = 'POSLFM';

    /** @var string Nº de horas */
    public const HORLFM = 'HORLFM';

    /** @var string Concepto */
    public const CONLFM = 'CONLFM';

    /** @var string Tipo de hora */
    public const THOLFM = 'THOLFM';

    /** @var string Precio de la hora */
    public const PRELFM = 'PRELFM';

    /** @var string [E]CÓDIGO DE LA FABRICACIÓN ENLAZADA */
    public const FABLFM = 'FABLFM';

    /** @var string [E]LINEA DEL FABRICADO DE LA ORDEN */
    public const LINLFM = 'LINLFM';
}
