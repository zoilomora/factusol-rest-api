<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_COB
{
    public const TABLE_NAME = 'F_COB';

    /** @var string Código */
    public const CODCOB = 'CODCOB';

    /** @var string Fecha */
    public const FECCOB = 'FECCOB';

    /** @var string Importe */
    public const IMPCOB = 'IMPCOB';

    /** @var string Concepto */
    public const CPTCOB = 'CPTCOB';

    /** @var string Contrapartida */
    public const CPACOB = 'CPACOB';

    /** @var string Observaciones */
    public const OBSCOB = 'OBSCOB';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRACOB = 'TRACOB';

    /** @var string [L=#0;Albarán#1;Factura emitida#2;Recibo]Tipo de documento de cobro */
    public const TIPCOB = 'TIPCOB';
}
