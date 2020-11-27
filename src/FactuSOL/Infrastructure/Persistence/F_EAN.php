<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_EAN
{
    public const TABLE_NAME = 'F_EAN';

    /** @var string Artículo */
    public const ARTEAN = 'F_EAN.ARTEAN';

    /** @var string Código de barras */
    public const EANEAN = 'F_EAN.EANEAN';
}
