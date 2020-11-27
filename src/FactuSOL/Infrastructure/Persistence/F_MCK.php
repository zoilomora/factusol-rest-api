<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_MCK
{
    public const TABLE_NAME = 'F_MCK';

    /** @var string Código control kilometraje */
    public const CODMCK = 'CODMCK';

    /** @var string Fecha del control */
    public const FECMCK = 'FECMCK';

    /** @var string Agente comercial */
    public const AGEMCK = 'AGEMCK';

    /** @var string Kilómetros inciales */
    public const KMIMCK = 'KMIMCK';

    /** @var string Kilómetros finales */
    public const KMFMCK = 'KMFMCK';
}
