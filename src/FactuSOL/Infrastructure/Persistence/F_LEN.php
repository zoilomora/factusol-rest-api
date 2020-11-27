<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LEN
{
    public const TABLE_NAME = 'F_LEN';

    /** @var string Nº de serie */
    public const TIPLEN = 'TIPLEN';

    /** @var string [F=000000]Código */
    public const CODLEN = 'CODLEN';

    /** @var string [E]Posición de la línea */
    public const POSLEN = 'POSLEN';

    /** @var string Artículo */
    public const ARTLEN = 'ARTLEN';

    /** @var string Descripción */
    public const DESLEN = 'DESLEN';

    /** @var string Cantidad */
    public const CANLEN = 'CANLEN';

    /** @var string Descuento 1 */
    public const DT1LEN = 'DT1LEN';

    /** @var string Descuento 2 */
    public const DT2LEN = 'DT2LEN';

    /** @var string Descuento 3 */
    public const DT3LEN = 'DT3LEN';

    /** @var string Precio */
    public const PRELEN = 'PRELEN';

    /** @var string Total */
    public const TOTLEN = 'TOTLEN';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALEN = 'IVALEN';

    /** @var string [E]Tipo de documento: V: Pedido de porveedores */
    public const DOCLEN = 'DOCLEN';

    /** @var string [E]Tipo de pedido de proveedor que la creo */
    public const DTPLEN = 'DTPLEN';

    /** @var string [E]Código de pedido de proveedor que la creo */
    public const DCOLEN = 'DCOLEN';

    /** @var string [E]Ejercicio */
    public const EJELEN = 'EJELEN';

    /** @var string Alto */
    public const ALTLEN = 'ALTLEN';

    /** @var string Ancho */
    public const ANCLEN = 'ANCLEN';

    /** @var string Fondo */
    public const FONLEN = 'FONLEN';

    /** @var string Bultos */
    public const BULLEN = 'BULLEN';

    /** @var string [E]Nº de serie */
    public const MEMLEN = 'MEMLEN';

    /** @var string [E]Fecha de fabricación */
    public const FFALEN = 'FFALEN';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLEN = 'FCOLEN';

    public const FIMLEN = 'FIMLEN';

    /** @var string Talla */
    public const CE1LEN = 'CE1LEN';

    /** @var string Color */
    public const CE2LEN = 'CE2LEN';

    /** @var string Imagen asociada a la línea */
    public const IMALEN = 'IMALEN';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLEN = 'SUMLEN';
}
