<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPP
{
    public const TABLE_NAME = 'F_LPP';

    /** @var string Nº de serie */
    public const TIPLPP = 'TIPLPP';

    /** @var string [F=000000]Código */
    public const CODLPP = 'CODLPP';

    /** @var string [E]Posición */
    public const POSLPP = 'POSLPP';

    /** @var string Artículo */
    public const ARTLPP = 'ARTLPP';

    /** @var string Descripción */
    public const DESLPP = 'DESLPP';

    /** @var string Cantidad */
    public const CANLPP = 'CANLPP';

    /** @var string Descuento 1 */
    public const DT1LPP = 'DT1LPP';

    /** @var string Descuento 2 */
    public const DT2LPP = 'DT2LPP';

    /** @var string Descuento 3 */
    public const DT3LPP = 'DT3LPP';

    /** @var string Precio */
    public const PRELPP = 'PRELPP';

    /** @var string Total */
    public const TOTLPP = 'TOTLPP';

    /** @var string Pendiente */
    public const PENLPP = 'PENLPP';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALPP = 'IVALPP';

    /** @var string [E]Estado */
    public const ESTLPP = 'ESTLPP';

    /** @var string Alto */
    public const ALTLPP = 'ALTLPP';

    /** @var string Ancho */
    public const ANCLPP = 'ANCLPP';

    /** @var string Fondo */
    public const FONLPP = 'FONLPP';

    /** @var string Bultos */
    public const BULLPP = 'BULLPP';

    /** @var string Comentarios */
    public const MEMLPP = 'MEMLPP';

    /** @var string [E]Fecha de fabricación */
    public const FFALPP = 'FFALPP';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLPP = 'FCOLPP';

    public const FIMLPP = 'FIMLPP';

    /** @var string Talla */
    public const CE1LPP = 'CE1LPP';

    /** @var string Color */
    public const CE2LPP = 'CE2LPP';

    /** @var string Imagen asociada a la línea */
    public const IMALPP = 'IMALPP';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLPP = 'SUMLPP';
}
