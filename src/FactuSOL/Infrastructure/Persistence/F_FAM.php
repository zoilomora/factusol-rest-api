<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FAM
{
    public const TABLE_NAME = 'F_FAM';

    /** @var string Código */
    public const CODFAM = 'CODFAM';

    /** @var string Descripción */
    public const DESFAM = 'DESFAM';

    /** @var string Sección */
    public const SECFAM = 'SECFAM';

    /** @var string Texto predefinido */
    public const TEXFAM = 'TEXFAM';

    /** @var string Cuenta contable (Ventas) */
    public const CUEFAM = 'CUEFAM';

    /** @var string Cuenta contable (Compras) */
    public const CUCFAM = 'CUCFAM';

    /** @var string [E]Permitir subida a internet */
    public const SUWFAM = 'SUWFAM';

    /** @var string [E]Imagen de la familia */
    public const IMAFAM = 'IMAFAM';

    /** @var string Fecha de la imagen */
    public const IMFFAM = 'IMFFAM';

    public const MPTFAM = 'MPTFAM';

    public const PFIFAM = 'PFIFAM';

    public const ORDFAM = 'ORDFAM';
}
