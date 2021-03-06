<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_1KB
{
    public const TABLE_NAME = 'F_1KB';

    /** @var string Código */
    public const COD1KB = 'COD1KB';

    /** @var string Tipo de huella (0 = Empresa, 1 = Personal) */
    public const THU1KB = 'THU1KB';

    /** @var string Campos incluidos en la huella */
    public const CAM1KB = 'CAM1KB';

    /** @var string Nombre a imprimir (0 = Fiscal, 1 = Comercial) */
    public const NIM1KB = 'NIM1KB';

    /** @var string Tamaño de impresión (fijo o máximo) */
    public const TIM1KB = 'TIM1KB';

    /** @var string Ancho de la huella */
    public const ANC1KB = 'ANC1KB';

    /** @var string Alto de la huella */
    public const ALT1KB = 'ALT1KB';

    /** @var string Tamaño del punto */
    public const TPU1KB = 'TPU1KB';

    /** @var string Alineación */
    public const ALI1KB = 'ALI1KB';

    /** @var string Posición X */
    public const POX1KB = 'POX1KB';

    /** @var string Posición Y */
    public const POY1KB = 'POY1KB';

    /** @var string Seguridad */
    public const SEG1KB = 'SEG1KB';

    /** @var string Ratio vertical */
    public const RVE1KB = 'RVE1KB';

    /** @var string Nivel de corrección de errores */
    public const NCE1KB = 'NCE1KB';

    /** @var string Rotación */
    public const ROT1KB = 'ROT1KB';

    /** @var string Color del pincel */
    public const CPI1KB = 'CPI1KB';

    /** @var string Fondo transparente */
    public const FTR1KB = 'FTR1KB';

    /** @var string Color del fondo */
    public const CFO1KB = 'CFO1KB';

    /** @var string Resolución */
    public const RES1KB = 'RES1KB';
}
