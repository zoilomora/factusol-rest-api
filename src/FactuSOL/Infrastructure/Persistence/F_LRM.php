<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LRM
{
    public const TABLE_NAME = 'F_LRM';

    /** @var string Código */
    public const CODLRM = 'F_LRM.CODLRM';

    /** @var string [E]Posición en la remesa */
    public const POSLRM = 'F_LRM.POSLRM';

    /** @var string [F=00000]Cliente */
    public const CLILRM = 'F_LRM.CLILRM';

    /** @var string Nombre */
    public const NOMLRM = 'F_LRM.NOMLRM';

    /** @var string Domicilio */
    public const DOMLRM = 'F_LRM.DOMLRM';

    /** @var string Cód. Postal */
    public const CPOLRM = 'F_LRM.CPOLRM';

    /** @var string Población */
    public const POBLRM = 'F_LRM.POBLRM';

    /** @var string Provincia */
    public const PROLRM = 'F_LRM.PROLRM';

    /** @var string N.I.F. */
    public const NIFLRM = 'F_LRM.NIFLRM';

    /** @var string Entidad */
    public const ENTLRM = 'F_LRM.ENTLRM';

    /** @var string Oficina */
    public const OFILRM = 'F_LRM.OFILRM';

    /** @var string Dígitos de control */
    public const DCOLRM = 'F_LRM.DCOLRM';

    /** @var string Nº de cuenta */
    public const CUELRM = 'F_LRM.CUELRM';

    /** @var string Vencimiento */
    public const VENLRM = 'F_LRM.VENLRM';

    /** @var string Concepto 1 */
    public const CO1LRM = 'F_LRM.CO1LRM';

    /** @var string Concepto 2 */
    public const CO2LRM = 'F_LRM.CO2LRM';

    /** @var string Concepto 3 */
    public const CO3LRM = 'F_LRM.CO3LRM';

    /** @var string Concepto 4 */
    public const CO4LRM = 'F_LRM.CO4LRM';

    /** @var string Importe 1 */
    public const IM1LRM = 'F_LRM.IM1LRM';

    /** @var string Importe 2 */
    public const IM2LRM = 'F_LRM.IM2LRM';

    /** @var string Importe 3 */
    public const IM3LRM = 'F_LRM.IM3LRM';

    /** @var string Importe 4 */
    public const IM4LRM = 'F_LRM.IM4LRM';

    /** @var string Total */
    public const TOTLRM = 'F_LRM.TOTLRM';

    /** @var string [E]Documentos que originan la línea de la remesa */
    public const FTILRM = 'F_LRM.FTILRM';

    /** @var string [E]Código de la factura de la línea de remesa */
    public const FCOLRM = 'F_LRM.FCOLRM';

    /** @var string País */
    public const PAILRM = 'F_LRM.PAILRM';

    /** @var string IBAN */
    public const IBALRM = 'F_LRM.IBALRM';

    /** @var string BIC */
    public const BICLRM = 'F_LRM.BICLRM';

    /** @var string Mandato referencia */
    public const MRELRM = 'F_LRM.MRELRM';

    /** @var string Mandato fecha */
    public const MFELRM = 'F_LRM.MFELRM';

    /** @var string Mandato tipo */
    public const MTILRM = 'F_LRM.MTILRM';

    /** @var string Propósito del adeudo */
    public const PADLRM = 'F_LRM.PADLRM';

    /** @var string Balanza de pagos. Clase de pago */
    public const BCPLRM = 'F_LRM.BCPLRM';

    /** @var string Balanza de pagos. Código estadístico */
    public const BCELRM = 'F_LRM.BCELRM';

    /** @var string Balanza de pagos. País */
    public const BPALRM = 'F_LRM.BPALRM';

    /** @var string Balanza de pagos. NIF */
    public const BNILRM = 'F_LRM.BNILRM';

    /** @var string Balanza de pagos. NOF */
    public const BNOLRM = 'F_LRM.BNOLRM';

    /** @var string Balanza de pagos. Código ISIN */
    public const BISLRM = 'F_LRM.BISLRM';
}
