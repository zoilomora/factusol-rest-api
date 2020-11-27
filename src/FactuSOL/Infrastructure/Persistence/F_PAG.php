<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PAG
{
    public const TABLE_NAME = 'F_PAG';

    /** @var string Código */
    public const CODPAG = 'F_PAG.CODPAG';

    /** @var string Lugar de emisión */
    public const LUGPAG = 'F_PAG.LUGPAG';

    /** @var string Importe */
    public const IMPPAG = 'F_PAG.IMPPAG';

    /** @var string Fecha de emisión */
    public const FEMPAG = 'F_PAG.FEMPAG';

    /** @var string Fecha de vencimiento */
    public const FVEPAG = 'F_PAG.FVEPAG';

    /** @var string [F=00000]Proveedor/Acreedor */
    public const PROPAG = 'F_PAG.PROPAG';

    /** @var string Banco */
    public const BANPAG = 'F_PAG.BANPAG';

    /** @var string Claúsula */
    public const CLAPAG = 'F_PAG.CLAPAG';

    /** @var string [E]0:Sin imprimir,1:Impreso,2:enviado */
    public const ESTPAG = 'F_PAG.ESTPAG';

    /** @var string Clave documento */
    public const CHEPAG = 'F_PAG.CHEPAG';

    /** @var string Nombre del proveedor */
    public const PNOPAG = 'F_PAG.PNOPAG';

    /** @var string 1=Pagaré;2=Cheque */
    public const TPAPAG = 'F_PAG.TPAPAG';

    /** @var string TRASPASADO A CONTABILIDAD */
    public const TRAPAG = 'F_PAG.TRAPAG';
}
