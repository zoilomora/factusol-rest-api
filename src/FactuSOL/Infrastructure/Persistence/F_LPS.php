<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPS
{
    public const TABLE_NAME = 'F_LPS';

    /** @var string Nº de serie */
    public const TIPLPS = 'TIPLPS';

    /** @var string [F=000000]Código */
    public const CODLPS = 'CODLPS';

    /** @var string [E]Posición */
    public const POSLPS = 'POSLPS';

    /** @var string Artículo */
    public const ARTLPS = 'ARTLPS';

    /** @var string Descripción */
    public const DESLPS = 'DESLPS';

    /** @var string Cantidad */
    public const CANLPS = 'CANLPS';

    /** @var string Descuento 1 */
    public const DT1LPS = 'DT1LPS';

    /** @var string Descuento 2 */
    public const DT2LPS = 'DT2LPS';

    /** @var string Descuento 3 */
    public const DT3LPS = 'DT3LPS';

    /** @var string Precio */
    public const PRELPS = 'PRELPS';

    /** @var string Total */
    public const TOTLPS = 'TOTLPS';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALPS = 'IVALPS';

    /** @var string Comentarios */
    public const MEMLPS = 'MEMLPS';

    /** @var string Alto */
    public const ALTLPS = 'ALTLPS';

    /** @var string Ancho */
    public const ANCLPS = 'ANCLPS';

    /** @var string Fondo */
    public const FONLPS = 'FONLPS';

    /** @var string [E]Fecha de fabricación */
    public const FFALPS = 'FFALPS';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLPS = 'FCOLPS';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLPS = 'IINLPS';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLPS = 'PIVLPS';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLPS = 'TIVLPS';

    public const FIMLPS = 'FIMLPS';

    /** @var string [E]Precio de costo cuando se creó la línea */
    public const COSLPS = 'COSLPS';

    /** @var string Talla */
    public const CE1LPS = 'CE1LPS';

    /** @var string Color */
    public const CE2LPS = 'CE2LPS';

    /** @var string Imagen asociada a la línea */
    public const IMALPS = 'IMALPS';

    /** @var string Nº de bultos */
    public const BULLPS = 'BULLPS';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLPS = 'SUMLPS';
}
