<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ANT
{
    public const TABLE_NAME = 'F_ANT';

    /** @var string Código */
    public const CODANT = 'CODANT';

    /** @var string Fecha */
    public const FECANT = 'FECANT';

    /** @var string [F=00000]Cliente */
    public const CLIANT = 'CLIANT';

    /** @var string Importe */
    public const IMPANT = 'IMPANT';

    /** @var string [L=#0;Sin aplicar#1;Aplicado]Estado */
    public const ESTANT = 'ESTANT';

    /** @var string [E]Documento al que se le aplicó el anticipo, 0= Ninguno, 1=Factura, 2=Albarán, 3=Recibo */
    public const DOCANT = 'DOCANT';

    /** @var string [E]TIPO DE DOCUMENTO AL QUE SE APLICO EL ANTICIPO */
    public const TDOANT = 'TDOANT';

    /** @var string [E]CODIGO DE DOCUMENTO AL QUE SE APLICO EL ANTICIPO */
    public const CDOANT = 'CDOANT';

    /** @var string [E]SUBCÓDIGO DE DOCUMENTO AL QUE SE APLICÓ EL ANTICIPO, EN CASO DE SER RECIBO */
    public const SDOANT = 'SDOANT';

    /** @var string Observaciones */
    public const OBSANT = 'OBSANT';

    /** @var string Tipo: 0=Vale, 1=Anticipo efectivo, 2=Anticipo otros */
    public const CRIANT = 'CRIANT';

    public const CAJANT = 'CAJANT';

    public const TPVIDANT = 'TPVIDANT';
}
