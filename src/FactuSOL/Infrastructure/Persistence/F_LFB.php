<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFB
{
    public const TABLE_NAME = 'F_LFB';

    /** @var string Nº de serie */
    public const TIPLFB = 'TIPLFB';

    /** @var string Código */
    public const CODLFB = 'CODLFB';

    /** @var string [E]Posicion */
    public const POSLFB = 'POSLFB';

    /** @var string Artículo */
    public const ARTLFB = 'ARTLFB';

    /** @var string Descripción */
    public const DESLFB = 'DESLFB';

    /** @var string Cantidad */
    public const CANLFB = 'CANLFB';

    /** @var string Descuento 1 */
    public const DT1LFB = 'DT1LFB';

    /** @var string Descuento 2 */
    public const DT2LFB = 'DT2LFB';

    /** @var string Descuento 3 */
    public const DT3LFB = 'DT3LFB';

    /** @var string Precio */
    public const PRELFB = 'PRELFB';

    /** @var string Total */
    public const TOTLFB = 'TOTLFB';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFB = 'IVALFB';

    /** @var string [E]documento que la creo P:presupuesto, C:cliente,A:Albaran */
    public const DOCLFB = 'DOCLFB';

    /** @var string [E]Tipo del documento que lo creo */
    public const DTPLFB = 'DTPLFB';

    /** @var string [E]Código del documento que lo creo */
    public const DCOLFB = 'DCOLFB';

    /** @var string [E]Precio de costo cuando se crea la línea */
    public const COSLFB = 'COSLFB';

    /** @var string Bultos */
    public const BULLFB = 'BULLFB';

    /** @var string Comisión del agente */
    public const COMLFB = 'COMLFB';

    /** @var string Comentarios */
    public const MEMLFB = 'MEMLFB';

    /** @var string [E]Ejercicio desde el que se valida */
    public const EJELFB = 'EJELFB';

    /** @var string Alto */
    public const ALTLFB = 'ALTLFB';

    /** @var string Ancho */
    public const ANCLFB = 'ANCLFB';

    /** @var string Fondo */
    public const FONLFB = 'FONLFB';

    /** @var string [E]Fecha de fabricación */
    public const FFALFB = 'FFALFB';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFB = 'FCOLFB';

    /** @var string [E]IVA INCLUIDO EN LA LÍNEA */
    public const IINLFB = 'IINLFB';

    /** @var string [E]PRECIO IVA INCLUIDO EN LA LÍNEA */
    public const PIVLFB = 'PIVLFB';

    /** @var string [E]TOTAL IVA INCLUIDO EN LA LÍNEA */
    public const TIVLFB = 'TIVLFB';

    public const FIMLFB = 'FIMLFB';

    /** @var string Talla */
    public const CE1LFB = 'CE1LFB';

    /** @var string Color */
    public const CE2LFB = 'CE2LFB';

    /** @var string Imagen asociada a la línea */
    public const IMALFB = 'IMALFB';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFB = 'SUMLFB';

    public const TCOLFB = 'TCOLFB';
}
