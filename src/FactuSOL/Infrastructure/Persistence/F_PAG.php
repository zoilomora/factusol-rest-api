<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PAG
{
    public const TABLE_NAME = 'F_PAG';

    /** @var string Código */
    public const CODPAG = 'CODPAG';

    /** @var string Lugar de emisión */
    public const LUGPAG = 'LUGPAG';

    /** @var string Importe */
    public const IMPPAG = 'IMPPAG';

    /** @var string Fecha de emisión */
    public const FEMPAG = 'FEMPAG';

    /** @var string Fecha de vencimiento */
    public const FVEPAG = 'FVEPAG';

    /** @var string [F=00000]Proveedor/Acreedor */
    public const PROPAG = 'PROPAG';

    /** @var string Banco */
    public const BANPAG = 'BANPAG';

    /** @var string Claúsula */
    public const CLAPAG = 'CLAPAG';

    /** @var string [E]0:Sin imprimir,1:Impreso,2:enviado */
    public const ESTPAG = 'ESTPAG';

    /** @var string Clave documento */
    public const CHEPAG = 'CHEPAG';

    /** @var string Nombre del proveedor */
    public const PNOPAG = 'PNOPAG';

    /** @var string 1=Pagaré;2=Cheque */
    public const TPAPAG = 'TPAPAG';

    /** @var string TRASPASADO A CONTABILIDAD */
    public const TRAPAG = 'TRAPAG';
}
