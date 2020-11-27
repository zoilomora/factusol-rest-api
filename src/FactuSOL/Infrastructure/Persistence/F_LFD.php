<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFD
{
    public const TABLE_NAME = 'F_LFD';

    /** @var string Nº de serie */
    public const TIPLFD = 'TIPLFD';

    /** @var string [F=000000]Código */
    public const CODLFD = 'CODLFD';

    /** @var string [E]Posicion */
    public const POSLFD = 'POSLFD';

    /** @var string Artículo */
    public const ARTLFD = 'ARTLFD';

    /** @var string Descripción */
    public const DESLFD = 'DESLFD';

    /** @var string Cantidad */
    public const CANLFD = 'CANLFD';

    /** @var string Descuento 1 */
    public const DT1LFD = 'DT1LFD';

    /** @var string Descuento 2 */
    public const DT2LFD = 'DT2LFD';

    /** @var string Descuento 3 */
    public const DT3LFD = 'DT3LFD';

    /** @var string Precio */
    public const PRELFD = 'PRELFD';

    /** @var string Total */
    public const TOTLFD = 'TOTLFD';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFD = 'IVALFD';

    /** @var string [E]Tipo de documento que la creo */
    public const DTPLFD = 'DTPLFD';

    /** @var string [E]Código del documento que la creo */
    public const DCOLFD = 'DCOLFD';

    /** @var string [E]Documento que la creo: P: pedido de proveedor, E:entrada */
    public const DOCLFD = 'DOCLFD';

    /** @var string [E]Ejercicio */
    public const EJELFD = 'EJELFD';

    /** @var string Alto */
    public const ALTLFD = 'ALTLFD';

    /** @var string Ancho */
    public const ANCLFD = 'ANCLFD';

    /** @var string Fondo */
    public const FONLFD = 'FONLFD';

    /** @var string Bultos */
    public const BULLFD = 'BULLFD';

    /** @var string Comentarios */
    public const MEMLFD = 'MEMLFD';

    /** @var string [E]Fecha de fabricación */
    public const FFALFD = 'FFALFD';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFD = 'FCOLFD';

    public const FIMLFD = 'FIMLFD';

    /** @var string Talla */
    public const CE1LFD = 'CE1LFD';

    /** @var string Color */
    public const CE2LFD = 'CE2LFD';

    /** @var string Imagen asociada a la línea */
    public const IMALFD = 'IMALFD';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFD = 'SUMLFD';
}
