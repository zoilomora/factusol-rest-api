<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPP
{
    public const TABLE_NAME = 'F_LPP';

    /** @var string Nº de serie */
    public const TIPLPP = 'F_LPP.TIPLPP';

    /** @var string [F=000000]Código */
    public const CODLPP = 'F_LPP.CODLPP';

    /** @var string [E]Posición */
    public const POSLPP = 'F_LPP.POSLPP';

    /** @var string Artículo */
    public const ARTLPP = 'F_LPP.ARTLPP';

    /** @var string Descripción */
    public const DESLPP = 'F_LPP.DESLPP';

    /** @var string Cantidad */
    public const CANLPP = 'F_LPP.CANLPP';

    /** @var string Descuento 1 */
    public const DT1LPP = 'F_LPP.DT1LPP';

    /** @var string Descuento 2 */
    public const DT2LPP = 'F_LPP.DT2LPP';

    /** @var string Descuento 3 */
    public const DT3LPP = 'F_LPP.DT3LPP';

    /** @var string Precio */
    public const PRELPP = 'F_LPP.PRELPP';

    /** @var string Total */
    public const TOTLPP = 'F_LPP.TOTLPP';

    /** @var string Pendiente */
    public const PENLPP = 'F_LPP.PENLPP';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Porcentaje de IVA */
    public const IVALPP = 'F_LPP.IVALPP';

    /** @var string [E]Estado */
    public const ESTLPP = 'F_LPP.ESTLPP';

    /** @var string Alto */
    public const ALTLPP = 'F_LPP.ALTLPP';

    /** @var string Ancho */
    public const ANCLPP = 'F_LPP.ANCLPP';

    /** @var string Fondo */
    public const FONLPP = 'F_LPP.FONLPP';

    /** @var string Bultos */
    public const BULLPP = 'F_LPP.BULLPP';

    /** @var string Comentarios */
    public const MEMLPP = 'F_LPP.MEMLPP';

    /** @var string [E]Fecha de fabricación */
    public const FFALPP = 'F_LPP.FFALPP';

    /** @var string [E]Fecha de consumo preferente */
    public const FCOLPP = 'F_LPP.FCOLPP';

    public const FIMLPP = 'F_LPP.FIMLPP';

    /** @var string Talla */
    public const CE1LPP = 'F_LPP.CE1LPP';

    /** @var string Color */
    public const CE2LPP = 'F_LPP.CE2LPP';

    /** @var string Imagen asociada a la línea */
    public const IMALPP = 'F_LPP.IMALPP';

    /** @var string Sumatorio donde se debe acumular el valor */
    public const SUMLPP = 'F_LPP.SUMLPP';
}
