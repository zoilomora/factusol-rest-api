<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPC
{
    public const TABLE_NAME = 'F_LPC';

    /** @var string Nº de serie */
    public const TIPLPC = 'F_LPC.TIPLPC';

    /** @var string [F=000000]Código */
    public const CODLPC = 'F_LPC.CODLPC';

    /** @var string [E]Posicion de la línea del ped. de cliente */
    public const POSLPC = 'F_LPC.POSLPC';

    /** @var string Artículo */
    public const ARTLPC = 'F_LPC.ARTLPC';

    /** @var string Descripción */
    public const DESLPC = 'F_LPC.DESLPC';

    /** @var string Cantidad */
    public const CANLPC = 'F_LPC.CANLPC';

    /** @var string Descuento 1 */
    public const DT1LPC = 'F_LPC.DT1LPC';

    /** @var string Descuento 2 */
    public const DT2LPC = 'F_LPC.DT2LPC';

    /** @var string Descuento 3 */
    public const DT3LPC = 'F_LPC.DT3LPC';

    /** @var string Precio */
    public const PRELPC = 'F_LPC.PRELPC';

    /** @var string Total */
    public const TOTLPC = 'F_LPC.TOTLPC';

    /** @var string Pendiente */
    public const PENLPC = 'F_LPC.PENLPC';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALPC = 'F_LPC.IVALPC';

    /** @var string [E]Documento que lo creo P: presupuesto */
    public const DOCLPC = 'F_LPC.DOCLPC';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLPC = 'F_LPC.DTPLPC';

    /** @var string [E]Código del documento que lo creo */
    public const DCOLPC = 'F_LPC.DCOLPC';

    /** @var string Comentarios */
    public const MEMLPC = 'F_LPC.MEMLPC';

    /** @var string [E]Ejercicio */
    public const EJELPC = 'F_LPC.EJELPC';

    /** @var string Alto */
    public const ALTLPC = 'F_LPC.ALTLPC';

    /** @var string Ancho */
    public const ANCLPC = 'F_LPC.ANCLPC';

    /** @var string Fondo */
    public const FONLPC = 'F_LPC.FONLPC';

    /** @var string [E]Fecha de fabricación */
    public const FFALPC = 'F_LPC.FFALPC';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLPC = 'F_LPC.FCOLPC';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLPC = 'F_LPC.IINLPC';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLPC = 'F_LPC.PIVLPC';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLPC = 'F_LPC.TIVLPC';

    public const FIMLPC = 'F_LPC.FIMLPC';

    /** @var string [E]PRECIO DE COSTO CUANDO SE CREÓ LA LÍNEA */
    public const COSLPC = 'F_LPC.COSLPC';

    /** @var string Bultos */
    public const BULLPC = 'F_LPC.BULLPC';

    /** @var string Talla */
    public const CE1LPC = 'F_LPC.CE1LPC';

    /** @var string Color */
    public const CE2LPC = 'F_LPC.CE2LPC';

    /** @var string Imagen asociada a la línea */
    public const IMALPC = 'F_LPC.IMALPC';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLPC = 'F_LPC.SUMLPC';

    public const ANULPC = 'F_LPC.ANULPC';
}
