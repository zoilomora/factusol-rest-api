<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LAL
{
    public const TABLE_NAME = 'F_LAL';

    /** @var string Nº de serie */
    public const TIPLAL = 'TIPLAL';

    /** @var string [F=000000]Código */
    public const CODLAL = 'CODLAL';

    /** @var string [E]Posicion de la linea de albaram */
    public const POSLAL = 'POSLAL';

    /** @var string Artículo */
    public const ARTLAL = 'ARTLAL';

    /** @var string Descripción */
    public const DESLAL = 'DESLAL';

    /** @var string Cantidad */
    public const CANLAL = 'CANLAL';

    /** @var string Descuento 1 */
    public const DT1LAL = 'DT1LAL';

    /** @var string Descuento 2 */
    public const DT2LAL = 'DT2LAL';

    /** @var string Descuento 3 */
    public const DT3LAL = 'DT3LAL';

    /** @var string Precio */
    public const PRELAL = 'PRELAL';

    /** @var string Total */
    public const TOTLAL = 'TOTLAL';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALAL = 'IVALAL';

    /** @var string [E]Documento que lo creo: P :pesupuesto, C: Pedido de clientes E:Entrada de mercancias */
    public const DOCLAL = 'DOCLAL';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLAL = 'DTPLAL';

    /** @var string [E]Código de pedido de cliente que la creo */
    public const DCOLAL = 'DCOLAL';

    /** @var string [E]Precio de costo cuando se crea la línea */
    public const COSLAL = 'COSLAL';

    /** @var string Número de bultos */
    public const BULLAL = 'BULLAL';

    /** @var string Comisión del agente */
    public const COMLAL = 'COMLAL';

    /** @var string Comentarios */
    public const MEMLAL = 'MEMLAL';

    /** @var string [E]Ejercicio del que proviene la validación de documento. */
    public const EJELAL = 'EJELAL';

    /** @var string Alto */
    public const ALTLAL = 'ALTLAL';

    /** @var string Ancho */
    public const ANCLAL = 'ANCLAL';

    /** @var string Fondo */
    public const FONLAL = 'FONLAL';

    /** @var string [E]Fecha de fabricación */
    public const FFALAL = 'FFALAL';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLAL = 'FCOLAL';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLAL = 'IINLAL';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLAL = 'PIVLAL';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLAL = 'TIVLAL';

    public const FIMLAL = 'FIMLAL';

    /** @var string Talla */
    public const CE1LAL = 'CE1LAL';

    /** @var string Color */
    public const CE2LAL = 'CE2LAL';

    /** @var string Imagen asociada a la línea */
    public const IMALAL = 'IMALAL';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLAL = 'SUMLAL';

    /** @var string [L=#0;Imprimir#1;No imprimir]No imprimir la línea */
    public const NIMLAL = 'NIMLAL';

    public const TCOLAL = 'TCOLAL';
}
