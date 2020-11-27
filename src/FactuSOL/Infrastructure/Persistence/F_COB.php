<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_COB
{
    public const TABLE_NAME = 'F_COB';

    /** @var string Código */
    public const CODCOB = 'F_COB.CODCOB';

    /** @var string Fecha */
    public const FECCOB = 'F_COB.FECCOB';

    /** @var string Importe */
    public const IMPCOB = 'F_COB.IMPCOB';

    /** @var string Concepto */
    public const CPTCOB = 'F_COB.CPTCOB';

    /** @var string Contrapartida */
    public const CPACOB = 'F_COB.CPACOB';

    /** @var string Observaciones */
    public const OBSCOB = 'F_COB.OBSCOB';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRACOB = 'F_COB.TRACOB';

    /** @var string [L=#0;Albarán#1;Factura emitida#2;Recibo]Tipo de documento de cobro */
    public const TIPCOB = 'F_COB.TIPCOB';
}
