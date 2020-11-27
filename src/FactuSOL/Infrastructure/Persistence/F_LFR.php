<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFR
{
    public const TABLE_NAME = 'F_LFR';

    /** @var string Nº de serie */
    public const TIPLFR = 'F_LFR.TIPLFR';

    /** @var string [F=000000]Código */
    public const CODLFR = 'F_LFR.CODLFR';

    /** @var string [E]Posicion de la fact. de prov. */
    public const POSLFR = 'F_LFR.POSLFR';

    /** @var string Artículo */
    public const ARTLFR = 'F_LFR.ARTLFR';

    /** @var string Descripción */
    public const DESLFR = 'F_LFR.DESLFR';

    /** @var string Cantidad */
    public const CANLFR = 'F_LFR.CANLFR';

    /** @var string Descuento 1 */
    public const DT1LFR = 'F_LFR.DT1LFR';

    /** @var string Descuento 2 */
    public const DT2LFR = 'F_LFR.DT2LFR';

    /** @var string Descuento 3 */
    public const DT3LFR = 'F_LFR.DT3LFR';

    /** @var string Precio */
    public const PRELFR = 'F_LFR.PRELFR';

    /** @var string Total */
    public const TOTLFR = 'F_LFR.TOTLFR';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFR = 'F_LFR.IVALFR';

    /** @var string [E]Tipo de documento que la creo */
    public const DTPLFR = 'F_LFR.DTPLFR';

    /** @var string [E]Código del documento que la creo */
    public const DCOLFR = 'F_LFR.DCOLFR';

    /** @var string [E]Documento que la creo: P: pedido de proveedor, E:entrada */
    public const DOCLFR = 'F_LFR.DOCLFR';

    /** @var string [E]Ejercicio */
    public const EJELFR = 'F_LFR.EJELFR';

    /** @var string Alto */
    public const ALTLFR = 'F_LFR.ALTLFR';

    /** @var string Ancho */
    public const ANCLFR = 'F_LFR.ANCLFR';

    /** @var string Fondo */
    public const FONLFR = 'F_LFR.FONLFR';

    /** @var string Bultos */
    public const BULLFR = 'F_LFR.BULLFR';

    /** @var string Comentarios */
    public const MEMLFR = 'F_LFR.MEMLFR';

    /** @var string [E]Fecha de fabricación */
    public const FFALFR = 'F_LFR.FFALFR';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFR = 'F_LFR.FCOLFR';

    public const FIMLFR = 'F_LFR.FIMLFR';

    /** @var string Talla */
    public const CE1LFR = 'F_LFR.CE1LFR';

    /** @var string Color */
    public const CE2LFR = 'F_LFR.CE2LFR';

    /** @var string Imagen asociada a la línea */
    public const IMALFR = 'F_LFR.IMALFR';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFR = 'F_LFR.SUMLFR';
}
