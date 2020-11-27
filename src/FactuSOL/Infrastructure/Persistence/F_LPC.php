<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPC
{
    public const TABLE_NAME = 'F_LPC';

    /** @var string Nº de serie */
    public const TIPLPC = 'TIPLPC';

    /** @var string [F=000000]Código */
    public const CODLPC = 'CODLPC';

    /** @var string [E]Posicion de la línea del ped. de cliente */
    public const POSLPC = 'POSLPC';

    /** @var string Artículo */
    public const ARTLPC = 'ARTLPC';

    /** @var string Descripción */
    public const DESLPC = 'DESLPC';

    /** @var string Cantidad */
    public const CANLPC = 'CANLPC';

    /** @var string Descuento 1 */
    public const DT1LPC = 'DT1LPC';

    /** @var string Descuento 2 */
    public const DT2LPC = 'DT2LPC';

    /** @var string Descuento 3 */
    public const DT3LPC = 'DT3LPC';

    /** @var string Precio */
    public const PRELPC = 'PRELPC';

    /** @var string Total */
    public const TOTLPC = 'TOTLPC';

    /** @var string Pendiente */
    public const PENLPC = 'PENLPC';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALPC = 'IVALPC';

    /** @var string [E]Documento que lo creo P: presupuesto */
    public const DOCLPC = 'DOCLPC';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLPC = 'DTPLPC';

    /** @var string [E]Código del documento que lo creo */
    public const DCOLPC = 'DCOLPC';

    /** @var string Comentarios */
    public const MEMLPC = 'MEMLPC';

    /** @var string [E]Ejercicio */
    public const EJELPC = 'EJELPC';

    /** @var string Alto */
    public const ALTLPC = 'ALTLPC';

    /** @var string Ancho */
    public const ANCLPC = 'ANCLPC';

    /** @var string Fondo */
    public const FONLPC = 'FONLPC';

    /** @var string [E]Fecha de fabricación */
    public const FFALPC = 'FFALPC';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLPC = 'FCOLPC';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLPC = 'IINLPC';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLPC = 'PIVLPC';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLPC = 'TIVLPC';

    public const FIMLPC = 'FIMLPC';

    /** @var string [E]PRECIO DE COSTO CUANDO SE CREÓ LA LÍNEA */
    public const COSLPC = 'COSLPC';

    /** @var string Bultos */
    public const BULLPC = 'BULLPC';

    /** @var string Talla */
    public const CE1LPC = 'CE1LPC';

    /** @var string Color */
    public const CE2LPC = 'CE2LPC';

    /** @var string Imagen asociada a la línea */
    public const IMALPC = 'IMALPC';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLPC = 'SUMLPC';

    public const ANULPC = 'ANULPC';
}
