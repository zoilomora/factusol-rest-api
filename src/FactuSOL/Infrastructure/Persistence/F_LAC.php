<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LAC
{
    public const TABLE_NAME = 'F_LAC';

    /** @var string Nº Serie */
    public const TFALAC = 'F_LAC.TFALAC';

    /** @var string [F=000000]Código */
    public const CALLAC = 'F_LAC.CALLAC';

    /** @var string [E]Código de la línea */
    public const LINLAC = 'F_LAC.LINLAC';

    /** @var string Fecha */
    public const FECLAC = 'F_LAC.FECLAC';

    /** @var string Importe */
    public const IMPLAC = 'F_LAC.IMPLAC';

    /** @var string Concepto */
    public const CPTLAC = 'F_LAC.CPTLAC';

    /** @var string [E]Contrapartida(De 0 a 9 : se selecciona de las 10 opciones de la tabla F_AUT) */
    public const CPALAC = 'F_LAC.CPALAC';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALAC = 'F_LAC.TRALAC';

    /** @var string Anticipo */
    public const ANTLAC = 'F_LAC.ANTLAC';

    /** @var string [L=#0;Cobro#1;Devolución]Tipo */
    public const TIPLAC = 'F_LAC.TIPLAC';

    /** @var string Forma de pago */
    public const FPALAC = 'F_LAC.FPALAC';

    /** @var string Observaciones */
    public const OBSLAC = 'F_LAC.OBSLAC';

    /** @var string [E]CODIGO DEL COBRO MÚLTIPLE EN EL QUE FUE INCLUIDA ESTA LÍNEA DE COBRO */
    public const MULLAC = 'F_LAC.MULLAC';

    /** @var string [E]Caja */
    public const CAJLAC = 'F_LAC.CAJLAC';

    /** @var string [E]Posición de la línea de caja */
    public const PCALAC = 'F_LAC.PCALAC';

    public const TPVIDLAC = 'F_LAC.TPVIDLAC';

    public const TERLAC = 'F_LAC.TERLAC';
}
