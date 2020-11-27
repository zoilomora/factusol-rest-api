<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_COM
{
    public const TABLE_NAME = 'F_COM';

    /** @var string Código */
    public const CODCOM = 'F_COM.CODCOM';

    /** @var string Artículo */
    public const ARTCOM = 'F_COM.ARTCOM';

    /** @var string Descripción */
    public const DESCOM = 'F_COM.DESCOM';

    /** @var string Precio de costo */
    public const COSCOM = 'F_COM.COSCOM';

    /** @var string Unidades */
    public const UNICOM = 'F_COM.UNICOM';

    public const CE1COM = 'F_COM.CE1COM';

    public const CE2COM = 'F_COM.CE2COM';

    public const ORDCOM = 'F_COM.ORDCOM';
}
