<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPS
{
    public const TABLE_NAME = 'F_LPS';

    /** @var string Nº de serie */
    public const TIPLPS = 'F_LPS.TIPLPS';

    /** @var string [F=000000]Código */
    public const CODLPS = 'F_LPS.CODLPS';

    /** @var string [E]Posición */
    public const POSLPS = 'F_LPS.POSLPS';

    /** @var string Artículo */
    public const ARTLPS = 'F_LPS.ARTLPS';

    /** @var string Descripción */
    public const DESLPS = 'F_LPS.DESLPS';

    /** @var string Cantidad */
    public const CANLPS = 'F_LPS.CANLPS';

    /** @var string Descuento 1 */
    public const DT1LPS = 'F_LPS.DT1LPS';

    /** @var string Descuento 2 */
    public const DT2LPS = 'F_LPS.DT2LPS';

    /** @var string Descuento 3 */
    public const DT3LPS = 'F_LPS.DT3LPS';

    /** @var string Precio */
    public const PRELPS = 'F_LPS.PRELPS';

    /** @var string Total */
    public const TOTLPS = 'F_LPS.TOTLPS';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALPS = 'F_LPS.IVALPS';

    /** @var string Comentarios */
    public const MEMLPS = 'F_LPS.MEMLPS';

    /** @var string Alto */
    public const ALTLPS = 'F_LPS.ALTLPS';

    /** @var string Ancho */
    public const ANCLPS = 'F_LPS.ANCLPS';

    /** @var string Fondo */
    public const FONLPS = 'F_LPS.FONLPS';

    /** @var string [E]Fecha de fabricación */
    public const FFALPS = 'F_LPS.FFALPS';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLPS = 'F_LPS.FCOLPS';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLPS = 'F_LPS.IINLPS';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLPS = 'F_LPS.PIVLPS';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLPS = 'F_LPS.TIVLPS';

    public const FIMLPS = 'F_LPS.FIMLPS';

    /** @var string [E]Precio de costo cuando se creó la línea */
    public const COSLPS = 'F_LPS.COSLPS';

    /** @var string Talla */
    public const CE1LPS = 'F_LPS.CE1LPS';

    /** @var string Color */
    public const CE2LPS = 'F_LPS.CE2LPS';

    /** @var string Imagen asociada a la línea */
    public const IMALPS = 'F_LPS.IMALPS';

    /** @var string Nº de bultos */
    public const BULLPS = 'F_LPS.BULLPS';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLPS = 'F_LPS.SUMLPS';
}
