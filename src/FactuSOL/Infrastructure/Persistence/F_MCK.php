<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_MCK
{
    public const TABLE_NAME = 'F_MCK';

    /** @var string Código control kilometraje */
    public const CODMCK = 'F_MCK.CODMCK';

    /** @var string Fecha del control */
    public const FECMCK = 'F_MCK.FECMCK';

    /** @var string Agente comercial */
    public const AGEMCK = 'F_MCK.AGEMCK';

    /** @var string Kilómetros inciales */
    public const KMIMCK = 'F_MCK.KMIMCK';

    /** @var string Kilómetros finales */
    public const KMFMCK = 'F_MCK.KMFMCK';
}
