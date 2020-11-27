<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LTR
{
    public const TABLE_NAME = 'F_LTR';

    /** @var string Código */
    public const DOCLTR = 'DOCLTR';

    /** @var string [E]Línea de traspaso */
    public const LINLTR = 'LINLTR';

    /** @var string Artículo */
    public const ARTLTR = 'ARTLTR';

    /** @var string Cantidad */
    public const CANLTR = 'CANLTR';

    /** @var string [E]Lote del traspaso de materiales */
    public const LOTLTR = 'LOTLTR';

    /** @var string [E]FECHA DE FABRICACION */
    public const FFALTR = 'FFALTR';

    /** @var string [E]FECHA DE CONSUMO DE LA LINEA DE TRASPASO */
    public const FCOLTR = 'FCOLTR';

    /** @var string Talla */
    public const CE1LTR = 'CE1LTR';

    /** @var string Color */
    public const CE2LTR = 'CE2LTR';

    /** @var string Nº de bultos en el traspaso */
    public const BULLTR = 'BULLTR';
}
