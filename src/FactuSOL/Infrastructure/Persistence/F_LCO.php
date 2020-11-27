<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LCO
{
    public const TABLE_NAME = 'F_LCO';

    /** @var string Nº Serie */
    public const TFALCO = 'TFALCO';

    /** @var string [F=000000]Código */
    public const CFALCO = 'CFALCO';

    /** @var string [E]Posición */
    public const LINLCO = 'LINLCO';

    /** @var string Fecha */
    public const FECLCO = 'FECLCO';

    /** @var string Importe */
    public const IMPLCO = 'IMPLCO';

    /** @var string Concepto */
    public const CPTLCO = 'CPTLCO';

    /** @var string [E]Contrapartida(De 0 a 9 : se selecciona de las 10 opciones de la tabla F_AUT) */
    public const CPALCO = 'CPALCO';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALCO = 'TRALCO';

    /** @var string Anticipo */
    public const ANTLCO = 'ANTLCO';

    /** @var string [L=#0;Cobro#1;Devolución]Tipo */
    public const TIPLCO = 'TIPLCO';

    /** @var string Forma de pago */
    public const FPALCO = 'FPALCO';

    /** @var string Observaciones */
    public const OBSLCO = 'OBSLCO';

    /** @var string [E]CODIGO DEL COBRO MÚLTIPLE EN EL QUE FUE INCLUIDA ESTA LÍNEA DE COBRO */
    public const MULLCO = 'MULLCO';

    /** @var string [E]Caja */
    public const CAJLCO = 'CAJLCO';

    /** @var string [E]Posición de la línea de caja */
    public const PCALCO = 'PCALCO';

    public const TPVIDLCO = 'TPVIDLCO';

    public const TERLCO = 'TERLCO';
}
