<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_TRA
{
    public const TABLE_NAME = 'F_TRA';

    /** @var string Código */
    public const DOCTRA = 'DOCTRA';

    /** @var string Fecha */
    public const FECTRA = 'FECTRA';

    /** @var string Almacén de origen */
    public const AORTRA = 'AORTRA';

    /** @var string Almacén de destino */
    public const ADETRA = 'ADETRA';

    /** @var string Comentarios */
    public const COMTRA = 'COMTRA';
}
