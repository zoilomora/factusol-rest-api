<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCO
{
    public const TABLE_NAME = 'F_LCO';

    /** @var string Nº Serie */
    public const TFALCO = 'F_LCO.TFALCO';

    /** @var string [F=000000]Código */
    public const CFALCO = 'F_LCO.CFALCO';

    /** @var string [E]Posición */
    public const LINLCO = 'F_LCO.LINLCO';

    /** @var string Fecha */
    public const FECLCO = 'F_LCO.FECLCO';

    /** @var string Importe */
    public const IMPLCO = 'F_LCO.IMPLCO';

    /** @var string Concepto */
    public const CPTLCO = 'F_LCO.CPTLCO';

    /** @var string [E]Contrapartida(De 0 a 9 : se selecciona de las 10 opciones de la tabla F_AUT) */
    public const CPALCO = 'F_LCO.CPALCO';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALCO = 'F_LCO.TRALCO';

    /** @var string Anticipo */
    public const ANTLCO = 'F_LCO.ANTLCO';

    /** @var string [L=#0;Cobro#1;Devolución]Tipo */
    public const TIPLCO = 'F_LCO.TIPLCO';

    /** @var string Forma de pago */
    public const FPALCO = 'F_LCO.FPALCO';

    /** @var string Observaciones */
    public const OBSLCO = 'F_LCO.OBSLCO';

    /** @var string [E]CODIGO DEL COBRO MÚLTIPLE EN EL QUE FUE INCLUIDA ESTA LÍNEA DE COBRO */
    public const MULLCO = 'F_LCO.MULLCO';

    /** @var string [E]Caja */
    public const CAJLCO = 'F_LCO.CAJLCO';

    /** @var string [E]Posición de la línea de caja */
    public const PCALCO = 'F_LCO.PCALCO';

    public const TPVIDLCO = 'F_LCO.TPVIDLCO';

    public const TERLCO = 'F_LCO.TERLCO';
}
