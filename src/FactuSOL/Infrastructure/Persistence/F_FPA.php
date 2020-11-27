<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FPA
{
    public const TABLE_NAME = 'F_FPA';

    /** @var string Código */
    public const CODFPA = 'CODFPA';

    /** @var string Descripción */
    public const DESFPA = 'DESFPA';

    /** @var string Nº de vencimientos */
    public const VENFPA = 'VENFPA';

    /** @var string [E]1:vencimientos proporcionales */
    public const PROFPA = 'PROFPA';

    /** @var string Días de vencimiento 1 */
    public const DIA1FPA = 'DIA1FPA';

    /** @var string Días de vencimiento 2 */
    public const DIA2FPA = 'DIA2FPA';

    /** @var string Días de vencimiento 3 */
    public const DIA3FPA = 'DIA3FPA';

    /** @var string Días de vencimiento 4 */
    public const DIA4FPA = 'DIA4FPA';

    /** @var string Días de vencimiento 5 */
    public const DIA5FPA = 'DIA5FPA';

    /** @var string Días de vencimiento 6 */
    public const DIA6FPA = 'DIA6FPA';

    /** @var string Proporción de pago 1 */
    public const PRO1FPA = 'PRO1FPA';

    /** @var string Proporción de pago 2 */
    public const PRO2FPA = 'PRO2FPA';

    /** @var string Proporción de pago 3 */
    public const PRO3FPA = 'PRO3FPA';

    /** @var string Proporción de pago 4 */
    public const PRO4FPA = 'PRO4FPA';

    /** @var string Proporción de pago 5 */
    public const PRO5FPA = 'PRO5FPA';

    /** @var string Proporción de pago 6 */
    public const PRO6FPA = 'PRO6FPA';

    /** @var string [E]SUBIR A INTERNET */
    public const SUWFPA = 'SUWFPA';

    /** @var string [E]DESCRIPCIÓN WEB */
    public const DEWFPA = 'DEWFPA';

    /** @var string [E] */
    public const TIPFPA = 'TIPFPA';

    /** @var string [E]EFECTIVO 0=NO; 1= SI */
    public const EFEFPA = 'EFEFPA';

    /** @var string [E]FORMA DE PAGO POR DIAS O POR MESES */
    public const MESFPA = 'MESFPA';

    /** @var string Ajustar al último día del mes */
    public const AUDFPA = 'AUDFPA';

    /** @var string Contrapartida por defecto para cobros */
    public const CCOFPA = 'CCOFPA';

    /** @var string Contrapartida por defecto para pagos */
    public const CPAFPA = 'CPAFPA';

    /** @var string Código de la forma de pago en el estándar Factura-e */
    public const CFEFPA = 'CFEFPA';

    public const REMFPA = 'REMFPA';

    public const UETFPA = 'UETFPA';

    public const BANFPA = 'BANFPA';
}
