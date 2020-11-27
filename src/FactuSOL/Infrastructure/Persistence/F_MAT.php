<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_MAT
{
    public const TABLE_NAME = 'F_MAT';

    /** @var string Código */
    public const CODMAT = 'CODMAT';

    /** @var string Fecha */
    public const FECMAT = 'FECMAT';

    /** @var string [F=00000]Trabajador */
    public const TRAMAT = 'TRAMAT';

    /** @var string Almacén */
    public const ALMMAT = 'ALMMAT';

    /** @var string [E]TIPO DE FACTURA */
    public const TFAMAT = 'TFAMAT';

    /** @var string [E]CODIGO DE LA FACTURA */
    public const CFAMAT = 'CFAMAT';
}
