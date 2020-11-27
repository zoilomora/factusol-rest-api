<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LTR
{
    public const TABLE_NAME = 'F_LTR';

    /** @var string Código */
    public const DOCLTR = 'F_LTR.DOCLTR';

    /** @var string [E]Línea de traspaso */
    public const LINLTR = 'F_LTR.LINLTR';

    /** @var string Artículo */
    public const ARTLTR = 'F_LTR.ARTLTR';

    /** @var string Cantidad */
    public const CANLTR = 'F_LTR.CANLTR';

    /** @var string [E]Lote del traspaso de materiales */
    public const LOTLTR = 'F_LTR.LOTLTR';

    /** @var string [E]FECHA DE FABRICACION */
    public const FFALTR = 'F_LTR.FFALTR';

    /** @var string [E]FECHA DE CONSUMO DE LA LINEA DE TRASPASO */
    public const FCOLTR = 'F_LTR.FCOLTR';

    /** @var string Talla */
    public const CE1LTR = 'F_LTR.CE1LTR';

    /** @var string Color */
    public const CE2LTR = 'F_LTR.CE2LTR';

    /** @var string Nº de bultos en el traspaso */
    public const BULLTR = 'F_LTR.BULLTR';
}
