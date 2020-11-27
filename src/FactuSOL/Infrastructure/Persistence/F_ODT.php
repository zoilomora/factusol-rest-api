<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ODT
{
    public const TABLE_NAME = 'F_ODT';

    /** @var string Código */
    public const CODODT = 'F_ODT.CODODT';

    /** @var string Fecha de inicio */
    public const FINODT = 'F_ODT.FINODT';

    /** @var string Fecha de fin */
    public const FFIODT = 'F_ODT.FFIODT';

    /** @var string Artículo */
    public const ARTODT = 'F_ODT.ARTODT';

    /** @var string Descripción del artículo */
    public const NARODT = 'F_ODT.NARODT';
}
