<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LAL
{
    public const TABLE_NAME = 'F_LAL';

    /** @var string Nº de serie */
    public const TIPLAL = 'F_LAL.TIPLAL';

    /** @var string [F=000000]Código */
    public const CODLAL = 'F_LAL.CODLAL';

    /** @var string [E]Posicion de la linea de albaram */
    public const POSLAL = 'F_LAL.POSLAL';

    /** @var string Artículo */
    public const ARTLAL = 'F_LAL.ARTLAL';

    /** @var string Descripción */
    public const DESLAL = 'F_LAL.DESLAL';

    /** @var string Cantidad */
    public const CANLAL = 'F_LAL.CANLAL';

    /** @var string Descuento 1 */
    public const DT1LAL = 'F_LAL.DT1LAL';

    /** @var string Descuento 2 */
    public const DT2LAL = 'F_LAL.DT2LAL';

    /** @var string Descuento 3 */
    public const DT3LAL = 'F_LAL.DT3LAL';

    /** @var string Precio */
    public const PRELAL = 'F_LAL.PRELAL';

    /** @var string Total */
    public const TOTLAL = 'F_LAL.TOTLAL';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALAL = 'F_LAL.IVALAL';

    /** @var string [E]Documento que lo creo: P :pesupuesto, C: Pedido de clientes E:Entrada de mercancias */
    public const DOCLAL = 'F_LAL.DOCLAL';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLAL = 'F_LAL.DTPLAL';

    /** @var string [E]Código de pedido de cliente que la creo */
    public const DCOLAL = 'F_LAL.DCOLAL';

    /** @var string [E]Precio de costo cuando se crea la línea */
    public const COSLAL = 'F_LAL.COSLAL';

    /** @var string Número de bultos */
    public const BULLAL = 'F_LAL.BULLAL';

    /** @var string Comisión del agente */
    public const COMLAL = 'F_LAL.COMLAL';

    /** @var string Comentarios */
    public const MEMLAL = 'F_LAL.MEMLAL';

    /** @var string [E]Ejercicio del que proviene la validación de documento. */
    public const EJELAL = 'F_LAL.EJELAL';

    /** @var string Alto */
    public const ALTLAL = 'F_LAL.ALTLAL';

    /** @var string Ancho */
    public const ANCLAL = 'F_LAL.ANCLAL';

    /** @var string Fondo */
    public const FONLAL = 'F_LAL.FONLAL';

    /** @var string [E]Fecha de fabricación */
    public const FFALAL = 'F_LAL.FFALAL';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLAL = 'F_LAL.FCOLAL';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLAL = 'F_LAL.IINLAL';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLAL = 'F_LAL.PIVLAL';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLAL = 'F_LAL.TIVLAL';

    public const FIMLAL = 'F_LAL.FIMLAL';

    /** @var string Talla */
    public const CE1LAL = 'F_LAL.CE1LAL';

    /** @var string Color */
    public const CE2LAL = 'F_LAL.CE2LAL';

    /** @var string Imagen asociada a la línea */
    public const IMALAL = 'F_LAL.IMALAL';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLAL = 'F_LAL.SUMLAL';

    /** @var string [L=#0;Imprimir#1;No imprimir]No imprimir la línea */
    public const NIMLAL = 'F_LAL.NIMLAL';

    public const TCOLAL = 'F_LAL.TCOLAL';
}
