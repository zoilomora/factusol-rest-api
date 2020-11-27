<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFD
{
    public const TABLE_NAME = 'F_LFD';

    /** @var string Nº de serie */
    public const TIPLFD = 'F_LFD.TIPLFD';

    /** @var string [F=000000]Código */
    public const CODLFD = 'F_LFD.CODLFD';

    /** @var string [E]Posicion */
    public const POSLFD = 'F_LFD.POSLFD';

    /** @var string Artículo */
    public const ARTLFD = 'F_LFD.ARTLFD';

    /** @var string Descripción */
    public const DESLFD = 'F_LFD.DESLFD';

    /** @var string Cantidad */
    public const CANLFD = 'F_LFD.CANLFD';

    /** @var string Descuento 1 */
    public const DT1LFD = 'F_LFD.DT1LFD';

    /** @var string Descuento 2 */
    public const DT2LFD = 'F_LFD.DT2LFD';

    /** @var string Descuento 3 */
    public const DT3LFD = 'F_LFD.DT3LFD';

    /** @var string Precio */
    public const PRELFD = 'F_LFD.PRELFD';

    /** @var string Total */
    public const TOTLFD = 'F_LFD.TOTLFD';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFD = 'F_LFD.IVALFD';

    /** @var string [E]Tipo de documento que la creo */
    public const DTPLFD = 'F_LFD.DTPLFD';

    /** @var string [E]Código del documento que la creo */
    public const DCOLFD = 'F_LFD.DCOLFD';

    /** @var string [E]Documento que la creo: P: pedido de proveedor, E:entrada */
    public const DOCLFD = 'F_LFD.DOCLFD';

    /** @var string [E]Ejercicio */
    public const EJELFD = 'F_LFD.EJELFD';

    /** @var string Alto */
    public const ALTLFD = 'F_LFD.ALTLFD';

    /** @var string Ancho */
    public const ANCLFD = 'F_LFD.ANCLFD';

    /** @var string Fondo */
    public const FONLFD = 'F_LFD.FONLFD';

    /** @var string Bultos */
    public const BULLFD = 'F_LFD.BULLFD';

    /** @var string Comentarios */
    public const MEMLFD = 'F_LFD.MEMLFD';

    /** @var string [E]Fecha de fabricación */
    public const FFALFD = 'F_LFD.FFALFD';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFD = 'F_LFD.FCOLFD';

    public const FIMLFD = 'F_LFD.FIMLFD';

    /** @var string Talla */
    public const CE1LFD = 'F_LFD.CE1LFD';

    /** @var string Color */
    public const CE2LFD = 'F_LFD.CE2LFD';

    /** @var string Imagen asociada a la línea */
    public const IMALFD = 'F_LFD.IMALFD';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFD = 'F_LFD.SUMLFD';
}
