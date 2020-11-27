<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFB
{
    public const TABLE_NAME = 'F_LFB';

    /** @var string Nº de serie */
    public const TIPLFB = 'F_LFB.TIPLFB';

    /** @var string Código */
    public const CODLFB = 'F_LFB.CODLFB';

    /** @var string [E]Posicion */
    public const POSLFB = 'F_LFB.POSLFB';

    /** @var string Artículo */
    public const ARTLFB = 'F_LFB.ARTLFB';

    /** @var string Descripción */
    public const DESLFB = 'F_LFB.DESLFB';

    /** @var string Cantidad */
    public const CANLFB = 'F_LFB.CANLFB';

    /** @var string Descuento 1 */
    public const DT1LFB = 'F_LFB.DT1LFB';

    /** @var string Descuento 2 */
    public const DT2LFB = 'F_LFB.DT2LFB';

    /** @var string Descuento 3 */
    public const DT3LFB = 'F_LFB.DT3LFB';

    /** @var string Precio */
    public const PRELFB = 'F_LFB.PRELFB';

    /** @var string Total */
    public const TOTLFB = 'F_LFB.TOTLFB';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFB = 'F_LFB.IVALFB';

    /** @var string [E]documento que la creo P:presupuesto, C:cliente,A:Albaran */
    public const DOCLFB = 'F_LFB.DOCLFB';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLFB = 'F_LFB.DTPLFB';

    /** @var string [E]Código del documento que lo creo */
    public const DCOLFB = 'F_LFB.DCOLFB';

    /** @var string [E]Precio de costo cuando se crea la línea */
    public const COSLFB = 'F_LFB.COSLFB';

    /** @var string Bultos */
    public const BULLFB = 'F_LFB.BULLFB';

    /** @var string Comisión del agente */
    public const COMLFB = 'F_LFB.COMLFB';

    /** @var string Comentarios */
    public const MEMLFB = 'F_LFB.MEMLFB';

    /** @var string [E]Ejercicio desde el que se valida */
    public const EJELFB = 'F_LFB.EJELFB';

    /** @var string Alto */
    public const ALTLFB = 'F_LFB.ALTLFB';

    /** @var string Ancho */
    public const ANCLFB = 'F_LFB.ANCLFB';

    /** @var string Fondo */
    public const FONLFB = 'F_LFB.FONLFB';

    /** @var string [E]Fecha de fabricación */
    public const FFALFB = 'F_LFB.FFALFB';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFB = 'F_LFB.FCOLFB';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLFB = 'F_LFB.IINLFB';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLFB = 'F_LFB.PIVLFB';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLFB = 'F_LFB.TIVLFB';

    public const FIMLFB = 'F_LFB.FIMLFB';

    /** @var string Talla */
    public const CE1LFB = 'F_LFB.CE1LFB';

    /** @var string Color */
    public const CE2LFB = 'F_LFB.CE2LFB';

    /** @var string Imagen asociada a la línea */
    public const IMALFB = 'F_LFB.IMALFB';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFB = 'F_LFB.SUMLFB';

    public const TCOLFB = 'F_LFB.TCOLFB';
}
