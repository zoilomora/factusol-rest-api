<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFA
{
    public const TABLE_NAME = 'F_LFA';

    /** @var string Nº de serie */
    public const TIPLFA = 'TIPLFA';

    /** @var string [F=000000]Código */
    public const CODLFA = 'CODLFA';

    /** @var string [E]Posicion */
    public const POSLFA = 'POSLFA';

    /** @var string Articulo */
    public const ARTLFA = 'ARTLFA';

    /** @var string Descripción */
    public const DESLFA = 'DESLFA';

    /** @var string Cantidad */
    public const CANLFA = 'CANLFA';

    /** @var string Descuento 1 */
    public const DT1LFA = 'DT1LFA';

    /** @var string Descuento 2 */
    public const DT2LFA = 'DT2LFA';

    /** @var string Descuento 3 */
    public const DT3LFA = 'DT3LFA';

    /** @var string Precio */
    public const PRELFA = 'PRELFA';

    /** @var string Total */
    public const TOTLFA = 'TOTLFA';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFA = 'IVALFA';

    /** @var string [E]documento que la creo P:presupuesto, C:cliente,A:Albaran */
    public const DOCLFA = 'DOCLFA';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLFA = 'DTPLFA';

    /** @var string [E]Código del documento que lo creo */
    public const DCOLFA = 'DCOLFA';

    /** @var string [E]Precio de costo cuando se crea la línea */
    public const COSLFA = 'COSLFA';

    /** @var string Bultos */
    public const BULLFA = 'BULLFA';

    /** @var string Comisión del agente */
    public const COMLFA = 'COMLFA';

    /** @var string Comentarios */
    public const MEMLFA = 'MEMLFA';

    /** @var string [E]Ejercicio desde el que se valida */
    public const EJELFA = 'EJELFA';

    /** @var string Alto */
    public const ALTLFA = 'ALTLFA';

    /** @var string Ancho */
    public const ANCLFA = 'ANCLFA';

    /** @var string Fondo */
    public const FONLFA = 'FONLFA';

    /** @var string [E]Fecha de fabricación */
    public const FFALFA = 'FFALFA';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFA = 'FCOLFA';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLFA = 'IINLFA';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLFA = 'PIVLFA';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLFA = 'TIVLFA';

    public const FIMLFA = 'FIMLFA';

    /** @var string Talla */
    public const CE1LFA = 'CE1LFA';

    /** @var string Color */
    public const CE2LFA = 'CE2LFA';

    /** @var string Imagen asociada a la línea */
    public const IMALFA = 'IMALFA';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFA = 'SUMLFA';

    /** @var string [L=#0;Imprimir#1;No imprimir]No imprimir la línea */
    public const NIMLFA = 'NIMLFA';

    public const TCOLFA = 'TCOLFA';
}
