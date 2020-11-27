<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCR
{
    public const TABLE_NAME = 'F_LCR';

    /** @var string Nº de serie */
    public const TRELCR = 'F_LCR.TRELCR';

    /** @var string [F=000000]Código */
    public const CRELCR = 'F_LCR.CRELCR';

    /** @var string Nº de vencimiento */
    public const POSLCR = 'F_LCR.POSLCR';

    /** @var string [E]Código de la línea */
    public const LINLCR = 'F_LCR.LINLCR';

    /** @var string Fecha */
    public const FECLCR = 'F_LCR.FECLCR';

    /** @var string Importe */
    public const IMPLCR = 'F_LCR.IMPLCR';

    /** @var string Concepto */
    public const CPTLCR = 'F_LCR.CPTLCR';

    /** @var string [E]Contrapartida(De 0 a 9 : se seleeciona de las 10 opciones de la tabla F_AUT) */
    public const CPALCR = 'F_LCR.CPALCR';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALCR = 'F_LCR.TRALCR';

    /** @var string Anticipo */
    public const ANTLCR = 'F_LCR.ANTLCR';

    /** @var string [L=#0;Cobro#1;Devolución]Tipo */
    public const TIPLCR = 'F_LCR.TIPLCR';

    /** @var string Observaciones */
    public const OBSLCR = 'F_LCR.OBSLCR';

    /** @var string [E]CODIGO DEL COBRO MÚLTIPLE EN EL QUE FUE INCLUIDA ESTA LÍNEA DE COBRO */
    public const MULLCR = 'F_LCR.MULLCR';

    /** @var string [E]Caja */
    public const CAJLCR = 'F_LCR.CAJLCR';

    /** @var string [E]Posición de la línea de caja */
    public const PCALCR = 'F_LCR.PCALCR';
}
