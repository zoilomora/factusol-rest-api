<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_RDO
{
    public const TABLE_NAME = 'F_RDO';

    /** @var string Código de la relación de documentos */
    public const CODRDO = 'CODRDO';

    /** @var string Documento origen (C=Pedido cliente, A=Albarán...) */
    public const DORRDO = 'DORRDO';

    /** @var string Serie del documento origen */
    public const TORRDO = 'TORRDO';

    /** @var string Código del documento origen */
    public const CORRDO = 'CORRDO';

    /** @var string Posición en el documento origen */
    public const PORRDO = 'PORRDO';

    /** @var string Línea dentro de la posición del documento origen (futuro uso - para fabricaciones, nº de serie...) */
    public const LORRDO = 'LORRDO';

    /** @var string Documento destino (V=Pedido proveedor, E=Entrada, A=Albarán...) */
    public const DDERDO = 'DDERDO';

    /** @var string Serie del documento destino */
    public const TDERDO = 'TDERDO';

    /** @var string Código del documento destino */
    public const CDERDO = 'CDERDO';

    /** @var string Posición en el documento destino */
    public const PDERDO = 'PDERDO';

    /** @var string Línea dentro de la posición del documento destino (futuro uso - para fabricaciones, nº de serie...) */
    public const LDERDO = 'LDERDO';
}
