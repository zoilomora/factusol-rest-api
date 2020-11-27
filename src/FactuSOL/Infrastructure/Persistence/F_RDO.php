<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_RDO
{
    public const TABLE_NAME = 'F_RDO';

    /** @var string Código de la relación de documentos */
    public const CODRDO = 'F_RDO.CODRDO';

    /** @var string Documento origen (C=Pedido cliente, A=Albarán...) */
    public const DORRDO = 'F_RDO.DORRDO';

    /** @var string Serie del documento origen */
    public const TORRDO = 'F_RDO.TORRDO';

    /** @var string Código del documento origen */
    public const CORRDO = 'F_RDO.CORRDO';

    /** @var string Posición en el documento origen */
    public const PORRDO = 'F_RDO.PORRDO';

    /** @var string Línea dentro de la posición del documento origen (futuro uso - para fabricaciones, nº de serie...) */
    public const LORRDO = 'F_RDO.LORRDO';

    /** @var string Documento destino (V=Pedido proveedor, E=Entrada, A=Albarán...) */
    public const DDERDO = 'F_RDO.DDERDO';

    /** @var string Serie del documento destino */
    public const TDERDO = 'F_RDO.TDERDO';

    /** @var string Código del documento destino */
    public const CDERDO = 'F_RDO.CDERDO';

    /** @var string Posición en el documento destino */
    public const PDERDO = 'F_RDO.PDERDO';

    /** @var string Línea dentro de la posición del documento destino (futuro uso - para fabricaciones, nº de serie...) */
    public const LDERDO = 'F_RDO.LDERDO';
}
