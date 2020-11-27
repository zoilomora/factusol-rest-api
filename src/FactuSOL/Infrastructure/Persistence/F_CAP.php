<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_CAP
{
    public const TABLE_NAME = 'F_CAP';

    /** @var string Letra */
    public const LETCAP = 'F_CAP.LETCAP';

    /** @var string Código */
    public const CODCAP = 'F_CAP.CODCAP';

    /** @var string Subcódigo */
    public const SUBCAP = 'F_CAP.SUBCAP';

    /** @var string [L=#0;Pte.#1;En curso#2;Terminado#3;Fact.#4;Fact.Parcial]Estado */
    public const ESTCAP = 'F_CAP.ESTCAP';

    /** @var string [F=00000]Cliente */
    public const CLICAP = 'F_CAP.CLICAP';

    /** @var string Denominación */
    public const DENCAP = 'F_CAP.DENCAP';

    /** @var string Descripción */
    public const DESCAP = 'F_CAP.DESCAP';

    /** @var string Localización */
    public const LOCCAP = 'F_CAP.LOCCAP';

    /** @var string Fecha de pedido */
    public const FPECAP = 'F_CAP.FPECAP';

    /** @var string Fecha de inicio */
    public const FINCAP = 'F_CAP.FINCAP';

    /** @var string Fecha de conclusión */
    public const FFICAP = 'F_CAP.FFICAP';

    /** @var string [L=#0;Administración#1;Presupuesto]Tipo de trabajo */
    public const TTRCAP = 'F_CAP.TTRCAP';

    /** @var string Materiales */
    public const MATCAP = 'F_CAP.MATCAP';

    /** @var string Mano de obra */
    public const MOBCAP = 'F_CAP.MOBCAP';

    /** @var string Porcentaje de índice */
    public const PINCAP = 'F_CAP.PINCAP';

    /** @var string Importe índice */
    public const IINCAP = 'F_CAP.IINCAP';

    /** @var string Coste total */
    public const COSCAP = 'F_CAP.COSCAP';

    /** @var string Porcentaje de margen */
    public const PMACAP = 'F_CAP.PMACAP';

    /** @var string Margen */
    public const IMACAP = 'F_CAP.IMACAP';

    /** @var string Precio venta */
    public const PVECAP = 'F_CAP.PVECAP';

    /** @var string Cantidad de material 1 */
    public const CAN1CAP = 'F_CAP.CAN1CAP';

    /** @var string Cantidad de material 2 */
    public const CAN2CAP = 'F_CAP.CAN2CAP';

    /** @var string Cantidad de material 3 */
    public const CAN3CAP = 'F_CAP.CAN3CAP';

    /** @var string Cantidad de material 4 */
    public const CAN4CAP = 'F_CAP.CAN4CAP';

    /** @var string Cantidad de material 5 */
    public const CAN5CAP = 'F_CAP.CAN5CAP';

    /** @var string Cantidad de material 6 */
    public const CAN6CAP = 'F_CAP.CAN6CAP';

    /** @var string Cantidad de material 7 */
    public const CAN7CAP = 'F_CAP.CAN7CAP';

    /** @var string Unidad de medida 1 */
    public const UME1CAP = 'F_CAP.UME1CAP';

    /** @var string Unidad de medida 2 */
    public const UME2CAP = 'F_CAP.UME2CAP';

    /** @var string Unidad de medida 3 */
    public const UME3CAP = 'F_CAP.UME3CAP';

    /** @var string Unidad de medida 4 */
    public const UME4CAP = 'F_CAP.UME4CAP';

    /** @var string Unidad de medida 5 */
    public const UME5CAP = 'F_CAP.UME5CAP';

    /** @var string Unidad de medida 6 */
    public const UME6CAP = 'F_CAP.UME6CAP';

    /** @var string Unidad de medida 7 */
    public const UME7CAP = 'F_CAP.UME7CAP';

    /** @var string Material 1 */
    public const MAT1CAP = 'F_CAP.MAT1CAP';

    /** @var string Material 2 */
    public const MAT2CAP = 'F_CAP.MAT2CAP';

    /** @var string Material 3 */
    public const MAT3CAP = 'F_CAP.MAT3CAP';

    /** @var string Material 4 */
    public const MAT4CAP = 'F_CAP.MAT4CAP';

    /** @var string Material 5 */
    public const MAT5CAP = 'F_CAP.MAT5CAP';

    /** @var string Material 6 */
    public const MAT6CAP = 'F_CAP.MAT6CAP';

    /** @var string Material 7 */
    public const MAT7CAP = 'F_CAP.MAT7CAP';

    /** @var string Total línea de material 1 */
    public const TOT1CAP = 'F_CAP.TOT1CAP';

    /** @var string Total línea de material 2 */
    public const TOT2CAP = 'F_CAP.TOT2CAP';

    /** @var string Total línea de material 3 */
    public const TOT3CAP = 'F_CAP.TOT3CAP';

    /** @var string Total línea de material 4 */
    public const TOT4CAP = 'F_CAP.TOT4CAP';

    /** @var string Total línea de material 5 */
    public const TOT5CAP = 'F_CAP.TOT5CAP';

    /** @var string Total línea de material 6 */
    public const TOT6CAP = 'F_CAP.TOT6CAP';

    /** @var string Total línea de material 7 */
    public const TOT7CAP = 'F_CAP.TOT7CAP';

    /** @var string Número de horas presupuestadas */
    public const NHPCAP = 'F_CAP.NHPCAP';

    /** @var string Descripción de dibujo 1 */
    public const DES1CAP = 'F_CAP.DES1CAP';

    /** @var string Descripción de dibujo 2 */
    public const DES2CAP = 'F_CAP.DES2CAP';

    /** @var string Unidades 1 */
    public const UNI1CAP = 'F_CAP.UNI1CAP';

    /** @var string Unidades 2 */
    public const UNI2CAP = 'F_CAP.UNI2CAP';

    /** @var string Precio unitario 1 */
    public const PUN1CAP = 'F_CAP.PUN1CAP';

    /** @var string Precio unitario 2 */
    public const PUN2CAP = 'F_CAP.PUN2CAP';

    /** @var string Total dibujo 1 */
    public const TOT21CAP = 'F_CAP.TOT21CAP';

    /** @var string Total dibujo 2 */
    public const TOT22CAP = 'F_CAP.TOT22CAP';
}
