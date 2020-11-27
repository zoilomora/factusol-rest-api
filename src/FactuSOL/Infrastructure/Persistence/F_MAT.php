<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_MAT
{
    public const TABLE_NAME = 'F_MAT';

    /** @var string Código */
    public const CODMAT = 'F_MAT.CODMAT';

    /** @var string Fecha */
    public const FECMAT = 'F_MAT.FECMAT';

    /** @var string [F=00000]Trabajador */
    public const TRAMAT = 'F_MAT.TRAMAT';

    /** @var string Almacén */
    public const ALMMAT = 'F_MAT.ALMMAT';

    /** @var string [E]TIPO DE FACTURA */
    public const TFAMAT = 'F_MAT.TFAMAT';

    /** @var string [E]CODIGO DE LA FACTURA */
    public const CFAMAT = 'F_MAT.CFAMAT';
}
