<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCR
{
    public const TABLE_NAME = 'F_LCR';

    /** @var string Nº de serie */
    public const TRELCR = 'TRELCR';

    /** @var string [F=000000]Código */
    public const CRELCR = 'CRELCR';

    /** @var string Nº de vencimiento */
    public const POSLCR = 'POSLCR';

    /** @var string [E]Código de la línea */
    public const LINLCR = 'LINLCR';

    /** @var string Fecha */
    public const FECLCR = 'FECLCR';

    /** @var string Importe */
    public const IMPLCR = 'IMPLCR';

    /** @var string Concepto */
    public const CPTLCR = 'CPTLCR';

    /** @var string [E]Contrapartida(De 0 a 9 : se seleeciona de las 10 opciones de la tabla F_AUT) */
    public const CPALCR = 'CPALCR';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALCR = 'TRALCR';

    /** @var string Anticipo */
    public const ANTLCR = 'ANTLCR';

    /** @var string [L=#0;Cobro#1;Devolución]Tipo */
    public const TIPLCR = 'TIPLCR';

    /** @var string Observaciones */
    public const OBSLCR = 'OBSLCR';

    /** @var string [E]CODIGO DEL COBRO MÚLTIPLE EN EL QUE FUE INCLUIDA ESTA LÍNEA DE COBRO */
    public const MULLCR = 'MULLCR';

    /** @var string [E]Caja */
    public const CAJLCR = 'CAJLCR';

    /** @var string [E]Posición de la línea de caja */
    public const PCALCR = 'PCALCR';
}
