<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FPA
{
    public const TABLE_NAME = 'F_FPA';

    /** @var string Código */
    public const CODFPA = 'F_FPA.CODFPA';

    /** @var string Descripción */
    public const DESFPA = 'F_FPA.DESFPA';

    /** @var string Nº de vencimientos */
    public const VENFPA = 'F_FPA.VENFPA';

    /** @var string [E]1:vencimientos proporcionales */
    public const PROFPA = 'F_FPA.PROFPA';

    /** @var string Días de vencimiento 1 */
    public const DIA1FPA = 'F_FPA.DIA1FPA';

    /** @var string Días de vencimiento 2 */
    public const DIA2FPA = 'F_FPA.DIA2FPA';

    /** @var string Días de vencimiento 3 */
    public const DIA3FPA = 'F_FPA.DIA3FPA';

    /** @var string Días de vencimiento 4 */
    public const DIA4FPA = 'F_FPA.DIA4FPA';

    /** @var string Días de vencimiento 5 */
    public const DIA5FPA = 'F_FPA.DIA5FPA';

    /** @var string Días de vencimiento 6 */
    public const DIA6FPA = 'F_FPA.DIA6FPA';

    /** @var string Proporción de pago 1 */
    public const PRO1FPA = 'F_FPA.PRO1FPA';

    /** @var string Proporción de pago 2 */
    public const PRO2FPA = 'F_FPA.PRO2FPA';

    /** @var string Proporción de pago 3 */
    public const PRO3FPA = 'F_FPA.PRO3FPA';

    /** @var string Proporción de pago 4 */
    public const PRO4FPA = 'F_FPA.PRO4FPA';

    /** @var string Proporción de pago 5 */
    public const PRO5FPA = 'F_FPA.PRO5FPA';

    /** @var string Proporción de pago 6 */
    public const PRO6FPA = 'F_FPA.PRO6FPA';

    /** @var string [E]SUBIR A INTERNET */
    public const SUWFPA = 'F_FPA.SUWFPA';

    /** @var string [E]DESCRIPCIÓN WEB */
    public const DEWFPA = 'F_FPA.DEWFPA';

    /** @var string [E] */
    public const TIPFPA = 'F_FPA.TIPFPA';

    /** @var string [E]EFECTIVO 0=NO; 1= SI */
    public const EFEFPA = 'F_FPA.EFEFPA';

    /** @var string [E]FORMA DE PAGO POR DIAS O POR MESES */
    public const MESFPA = 'F_FPA.MESFPA';

    /** @var string Ajustar al último día del mes */
    public const AUDFPA = 'F_FPA.AUDFPA';

    /** @var string Contrapartida por defecto para cobros */
    public const CCOFPA = 'F_FPA.CCOFPA';

    /** @var string Contrapartida por defecto para pagos */
    public const CPAFPA = 'F_FPA.CPAFPA';

    /** @var string Código de la forma de pago en el estándar Factura-e */
    public const CFEFPA = 'F_FPA.CFEFPA';

    public const REMFPA = 'F_FPA.REMFPA';

    public const UETFPA = 'F_FPA.UETFPA';

    public const BANFPA = 'F_FPA.BANFPA';
}
