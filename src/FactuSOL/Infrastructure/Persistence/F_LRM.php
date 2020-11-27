<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LRM
{
    public const TABLE_NAME = 'F_LRM';

    /** @var string Código */
    public const CODLRM = 'CODLRM';

    /** @var string [E]Posición en la remesa */
    public const POSLRM = 'POSLRM';

    /** @var string [F=00000]Cliente */
    public const CLILRM = 'CLILRM';

    /** @var string Nombre */
    public const NOMLRM = 'NOMLRM';

    /** @var string Domicilio */
    public const DOMLRM = 'DOMLRM';

    /** @var string Cód. Postal */
    public const CPOLRM = 'CPOLRM';

    /** @var string Población */
    public const POBLRM = 'POBLRM';

    /** @var string Provincia */
    public const PROLRM = 'PROLRM';

    /** @var string N.I.F. */
    public const NIFLRM = 'NIFLRM';

    /** @var string Entidad */
    public const ENTLRM = 'ENTLRM';

    /** @var string Oficina */
    public const OFILRM = 'OFILRM';

    /** @var string Dígitos de control */
    public const DCOLRM = 'DCOLRM';

    /** @var string Nº de cuenta */
    public const CUELRM = 'CUELRM';

    /** @var string Vencimiento */
    public const VENLRM = 'VENLRM';

    /** @var string Concepto 1 */
    public const CO1LRM = 'CO1LRM';

    /** @var string Concepto 2 */
    public const CO2LRM = 'CO2LRM';

    /** @var string Concepto 3 */
    public const CO3LRM = 'CO3LRM';

    /** @var string Concepto 4 */
    public const CO4LRM = 'CO4LRM';

    /** @var string Importe 1 */
    public const IM1LRM = 'IM1LRM';

    /** @var string Importe 2 */
    public const IM2LRM = 'IM2LRM';

    /** @var string Importe 3 */
    public const IM3LRM = 'IM3LRM';

    /** @var string Importe 4 */
    public const IM4LRM = 'IM4LRM';

    /** @var string Total */
    public const TOTLRM = 'TOTLRM';

    /** @var string [E]Documentos que originan la línea de la remesa */
    public const FTILRM = 'FTILRM';

    /** @var string [E]Código de la factura de la línea de remesa */
    public const FCOLRM = 'FCOLRM';

    /** @var string País */
    public const PAILRM = 'PAILRM';

    /** @var string IBAN */
    public const IBALRM = 'IBALRM';

    /** @var string BIC */
    public const BICLRM = 'BICLRM';

    /** @var string Mandato referencia */
    public const MRELRM = 'MRELRM';

    /** @var string Mandato fecha */
    public const MFELRM = 'MFELRM';

    /** @var string Mandato tipo */
    public const MTILRM = 'MTILRM';

    /** @var string Propósito del adeudo */
    public const PADLRM = 'PADLRM';

    /** @var string Balanza de pagos. Clase de pago */
    public const BCPLRM = 'BCPLRM';

    /** @var string Balanza de pagos. Código estadístico */
    public const BCELRM = 'BCELRM';

    /** @var string Balanza de pagos. País */
    public const BPALRM = 'BPALRM';

    /** @var string Balanza de pagos. NIF */
    public const BNILRM = 'BNILRM';

    /** @var string Balanza de pagos. NOF */
    public const BNOLRM = 'BNOLRM';

    /** @var string Balanza de pagos. Código ISIN */
    public const BISLRM = 'BISLRM';
}
