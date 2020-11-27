<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_TRA
{
    public const TABLE_NAME = 'F_TRA';

    /** @var string Código */
    public const DOCTRA = 'F_TRA.DOCTRA';

    /** @var string Fecha */
    public const FECTRA = 'F_TRA.FECTRA';

    /** @var string Almacén de origen */
    public const AORTRA = 'F_TRA.AORTRA';

    /** @var string Almacén de destino */
    public const ADETRA = 'F_TRA.ADETRA';

    /** @var string Comentarios */
    public const COMTRA = 'F_TRA.COMTRA';
}
