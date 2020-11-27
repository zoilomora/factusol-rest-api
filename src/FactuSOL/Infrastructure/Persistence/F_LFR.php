<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LFR
{
    public const TABLE_NAME = 'F_LFR';

    /** @var string Nº de serie */
    public const TIPLFR = 'TIPLFR';

    /** @var string [F=000000]Código */
    public const CODLFR = 'CODLFR';

    /** @var string [E]Posicion de la fact. de prov. */
    public const POSLFR = 'POSLFR';

    /** @var string Artículo */
    public const ARTLFR = 'ARTLFR';

    /** @var string Descripción */
    public const DESLFR = 'DESLFR';

    /** @var string Cantidad */
    public const CANLFR = 'CANLFR';

    /** @var string Descuento 1 */
    public const DT1LFR = 'DT1LFR';

    /** @var string Descuento 2 */
    public const DT2LFR = 'DT2LFR';

    /** @var string Descuento 3 */
    public const DT3LFR = 'DT3LFR';

    /** @var string Precio */
    public const PRELFR = 'PRELFR';

    /** @var string Total */
    public const TOTLFR = 'TOTLFR';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALFR = 'IVALFR';

    /** @var string [E]Tipo de documento que la creo */
    public const DTPLFR = 'DTPLFR';

    /** @var string [E]Código del documento que la creo */
    public const DCOLFR = 'DCOLFR';

    /** @var string [E]Documento que la creo: P: pedido de proveedor, E:entrada */
    public const DOCLFR = 'DOCLFR';

    /** @var string [E]Ejercicio */
    public const EJELFR = 'EJELFR';

    /** @var string Alto */
    public const ALTLFR = 'ALTLFR';

    /** @var string Ancho */
    public const ANCLFR = 'ANCLFR';

    /** @var string Fondo */
    public const FONLFR = 'FONLFR';

    /** @var string Bultos */
    public const BULLFR = 'BULLFR';

    /** @var string Comentarios */
    public const MEMLFR = 'MEMLFR';

    /** @var string [E]Fecha de fabricación */
    public const FFALFR = 'FFALFR';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLFR = 'FCOLFR';

    public const FIMLFR = 'FIMLFR';

    /** @var string Talla */
    public const CE1LFR = 'CE1LFR';

    /** @var string Color */
    public const CE2LFR = 'CE2LFR';

    /** @var string Imagen asociada a la línea */
    public const IMALFR = 'IMALFR';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLFR = 'SUMLFR';
}
