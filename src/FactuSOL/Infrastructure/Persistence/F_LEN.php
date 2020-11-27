<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LEN
{
    public const TABLE_NAME = 'F_LEN';

    /** @var string Nº de serie */
    public const TIPLEN = 'F_LEN.TIPLEN';

    /** @var string [F=000000]Código */
    public const CODLEN = 'F_LEN.CODLEN';

    /** @var string [E]Posición de la línea */
    public const POSLEN = 'F_LEN.POSLEN';

    /** @var string Artículo */
    public const ARTLEN = 'F_LEN.ARTLEN';

    /** @var string Descripción */
    public const DESLEN = 'F_LEN.DESLEN';

    /** @var string Cantidad */
    public const CANLEN = 'F_LEN.CANLEN';

    /** @var string Descuento 1 */
    public const DT1LEN = 'F_LEN.DT1LEN';

    /** @var string Descuento 2 */
    public const DT2LEN = 'F_LEN.DT2LEN';

    /** @var string Descuento 3 */
    public const DT3LEN = 'F_LEN.DT3LEN';

    /** @var string Precio */
    public const PRELEN = 'F_LEN.PRELEN';

    /** @var string Total */
    public const TOTLEN = 'F_LEN.TOTLEN';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALEN = 'F_LEN.IVALEN';

    /** @var string [E]Tipo de documento: V: Pedido de porveedores */
    public const DOCLEN = 'F_LEN.DOCLEN';

    /** @var string [E]Tipo de pedido de proveedor que la creo */
    public const DTPLEN = 'F_LEN.DTPLEN';

    /** @var string [E]Código de pedido de proveedor que la creo */
    public const DCOLEN = 'F_LEN.DCOLEN';

    /** @var string [E]Ejercicio */
    public const EJELEN = 'F_LEN.EJELEN';

    /** @var string Alto */
    public const ALTLEN = 'F_LEN.ALTLEN';

    /** @var string Ancho */
    public const ANCLEN = 'F_LEN.ANCLEN';

    /** @var string Fondo */
    public const FONLEN = 'F_LEN.FONLEN';

    /** @var string Bultos */
    public const BULLEN = 'F_LEN.BULLEN';

    /** @var string [E]Nº de serie */
    public const MEMLEN = 'F_LEN.MEMLEN';

    /** @var string [E]Fecha de fabricación */
    public const FFALEN = 'F_LEN.FFALEN';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLEN = 'F_LEN.FCOLEN';

    public const FIMLEN = 'F_LEN.FIMLEN';

    /** @var string Talla */
    public const CE1LEN = 'F_LEN.CE1LEN';

    /** @var string Color */
    public const CE2LEN = 'F_LEN.CE2LEN';

    /** @var string Imagen asociada a la línea */
    public const IMALEN = 'F_LEN.IMALEN';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLEN = 'F_LEN.SUMLEN';
}
