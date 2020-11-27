<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FAM
{
    public const TABLE_NAME = 'F_FAM';

    /** @var string Código */
    public const CODFAM = 'F_FAM.CODFAM';

    /** @var string Descripción */
    public const DESFAM = 'F_FAM.DESFAM';

    /** @var string Sección */
    public const SECFAM = 'F_FAM.SECFAM';

    /** @var string Texto predefinido */
    public const TEXFAM = 'F_FAM.TEXFAM';

    /** @var string Cuenta contable (Ventas) */
    public const CUEFAM = 'F_FAM.CUEFAM';

    /** @var string Cuenta contable (Compras) */
    public const CUCFAM = 'F_FAM.CUCFAM';

    /** @var string [E]Permitir subida a internet */
    public const SUWFAM = 'F_FAM.SUWFAM';

    /** @var string [E]Imagen de la familia */
    public const IMAFAM = 'F_FAM.IMAFAM';

    /** @var string Fecha de la imagen */
    public const IMFFAM = 'F_FAM.IMFFAM';

    public const MPTFAM = 'F_FAM.MPTFAM';

    public const PFIFAM = 'F_FAM.PFIFAM';

    public const ORDFAM = 'F_FAM.ORDFAM';
}
