<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ANT
{
    public const TABLE_NAME = 'F_ANT';

    /** @var string Código */
    public const CODANT = 'F_ANT.CODANT';

    /** @var string Fecha */
    public const FECANT = 'F_ANT.FECANT';

    /** @var string [F=00000]Cliente */
    public const CLIANT = 'F_ANT.CLIANT';

    /** @var string Importe */
    public const IMPANT = 'F_ANT.IMPANT';

    /** @var string [L=#0;Sin aplicar#1;Aplicado]Estado */
    public const ESTANT = 'F_ANT.ESTANT';

    /** @var string [E]Documento al que se le aplicó el anticipo, 0= Ninguno, 1=Factura, 2=Albarán, 3=Recibo */
    public const DOCANT = 'F_ANT.DOCANT';

    /** @var string [E]TIPO DE DOCUMENTO AL QUE SE APLICO EL ANTICIPO */
    public const TDOANT = 'F_ANT.TDOANT';

    /** @var string [E]CODIGO DE DOCUMENTO AL QUE SE APLICO EL ANTICIPO */
    public const CDOANT = 'F_ANT.CDOANT';

    /** @var string [E]SUBCÓDIGO DE DOCUMENTO AL QUE SE APLICÓ EL ANTICIPO, EN CASO DE SER RECIBO */
    public const SDOANT = 'F_ANT.SDOANT';

    /** @var string Observaciones */
    public const OBSANT = 'F_ANT.OBSANT';

    /** @var string Tipo: 0=Vale, 1=Anticipo efectivo, 2=Anticipo otros */
    public const CRIANT = 'F_ANT.CRIANT';

    public const CAJANT = 'F_ANT.CAJANT';

    public const TPVIDANT = 'F_ANT.TPVIDANT';
}
