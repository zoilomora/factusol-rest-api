<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFA
{
    public const TABLE_NAME = 'F_LFA';

    /** @var string Nº de serie */
    public const TIPLFA = 'F_LFA.TIPLFA';

    /** @var string [F=000000]Código */
    public const CODLFA = 'F_LFA.CODLFA';

    /** @var string [E]Posicion */
    public const POSLFA = 'F_LFA.POSLFA';

    /** @var string Articulo */
    public const ARTLFA = 'F_LFA.ARTLFA';

    /** @var string Descripción */
    public const DESLFA = 'F_LFA.DESLFA';

    /** @var string Cantidad */
    public const CANLFA = 'F_LFA.CANLFA';

    /** @var string Descuento 1 */
    public const DT1LFA = 'F_LFA.DT1LFA';

    /** @var string Descuento 2 */
    public const DT2LFA = 'F_LFA.DT2LFA';

    /** @var string Descuento 3 */
    public const DT3LFA = 'F_LFA.DT3LFA';

    /** @var string Precio */
    public const PRELFA = 'F_LFA.PRELFA';

    /** @var string Total */
    public const TOTLFA = 'F_LFA.TOTLFA';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFA = 'F_LFA.IVALFA';

    /** @var string [E]documento que la creo P:presupuesto, C:cliente,A:Albaran */
    public const DOCLFA = 'F_LFA.DOCLFA';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLFA = 'F_LFA.DTPLFA';

    /** @var string [E]Código del documento que lo creo */
    public const DCOLFA = 'F_LFA.DCOLFA';

    /** @var string [E]Precio de costo cuando se crea la línea */
    public const COSLFA = 'F_LFA.COSLFA';

    /** @var string Bultos */
    public const BULLFA = 'F_LFA.BULLFA';

    /** @var string Comisión del agente */
    public const COMLFA = 'F_LFA.COMLFA';

    /** @var string Comentarios */
    public const MEMLFA = 'F_LFA.MEMLFA';

    /** @var string [E]Ejercicio desde el que se valida */
    public const EJELFA = 'F_LFA.EJELFA';

    /** @var string Alto */
    public const ALTLFA = 'F_LFA.ALTLFA';

    /** @var string Ancho */
    public const ANCLFA = 'F_LFA.ANCLFA';

    /** @var string Fondo */
    public const FONLFA = 'F_LFA.FONLFA';

    /** @var string [E]Fecha de fabricación */
    public const FFALFA = 'F_LFA.FFALFA';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFA = 'F_LFA.FCOLFA';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLFA = 'F_LFA.IINLFA';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLFA = 'F_LFA.PIVLFA';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLFA = 'F_LFA.TIVLFA';

    public const FIMLFA = 'F_LFA.FIMLFA';

    /** @var string Talla */
    public const CE1LFA = 'F_LFA.CE1LFA';

    /** @var string Color */
    public const CE2LFA = 'F_LFA.CE2LFA';

    /** @var string Imagen asociada a la línea */
    public const IMALFA = 'F_LFA.IMALFA';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFA = 'F_LFA.SUMLFA';

    /** @var string [L=#0;Imprimir#1;No imprimir]No imprimir la línea */
    public const NIMLFA = 'F_LFA.NIMLFA';

    public const TCOLFA = 'F_LFA.TCOLFA';
}
