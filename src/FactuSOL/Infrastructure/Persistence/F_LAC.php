<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LAC
{
    public const TABLE_NAME = 'F_LAC';

    /** @var string Nº Serie */
    public const TFALAC = 'TFALAC';

    /** @var string [F=000000]Código */
    public const CALLAC = 'CALLAC';

    /** @var string [E]Código de la línea */
    public const LINLAC = 'LINLAC';

    /** @var string Fecha */
    public const FECLAC = 'FECLAC';

    /** @var string Importe */
    public const IMPLAC = 'IMPLAC';

    /** @var string Concepto */
    public const CPTLAC = 'CPTLAC';

    /** @var string [E]Contrapartida(De 0 a 9 : se selecciona de las 10 opciones de la tabla F_AUT) */
    public const CPALAC = 'CPALAC';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALAC = 'TRALAC';

    /** @var string Anticipo */
    public const ANTLAC = 'ANTLAC';

    /** @var string [L=#0;Cobro#1;Devolución]Tipo */
    public const TIPLAC = 'TIPLAC';

    /** @var string Forma de pago */
    public const FPALAC = 'FPALAC';

    /** @var string Observaciones */
    public const OBSLAC = 'OBSLAC';

    /** @var string [E]CODIGO DEL COBRO MÚLTIPLE EN EL QUE FUE INCLUIDA ESTA LÍNEA DE COBRO */
    public const MULLAC = 'MULLAC';

    /** @var string [E]Caja */
    public const CAJLAC = 'CAJLAC';

    /** @var string [E]Posición de la línea de caja */
    public const PCALAC = 'PCALAC';

    public const TPVIDLAC = 'TPVIDLAC';

    public const TERLAC = 'TERLAC';
}
