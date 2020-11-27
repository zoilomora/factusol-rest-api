<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FRD
{
    public const TABLE_NAME = 'F_FRD';

    /** @var string Nº de serie */
    public const TIPFRD = 'F_FRD.TIPFRD';

    /** @var string [F=000000]Código */
    public const CODFRD = 'F_FRD.CODFRD';

    /** @var string Código de factura */
    public const FACFRD = 'F_FRD.FACFRD';

    /** @var string Referencia */
    public const REFFRD = 'F_FRD.REFFRD';

    /** @var string Fecha */
    public const FECFRD = 'F_FRD.FECFRD';

    /** @var string [F=00000]Proveedor */
    public const PROFRD = 'F_FRD.PROFRD';

    /** @var string Estado */
    public const ESTFRD = 'F_FRD.ESTFRD';

    /** @var string Cliente del proveedor */
    public const CLIFRD = 'F_FRD.CLIFRD';

    /** @var string Nombre */
    public const PNOFRD = 'F_FRD.PNOFRD';

    /** @var string Domicilio */
    public const PDOFRD = 'F_FRD.PDOFRD';

    /** @var string Población */
    public const PPOFRD = 'F_FRD.PPOFRD';

    /** @var string Cód. Postal */
    public const PCPFRD = 'F_FRD.PCPFRD';

    /** @var string Provincia */
    public const PPRFRD = 'F_FRD.PPRFRD';

    /** @var string N.I.F. */
    public const PNIFRD = 'F_FRD.PNIFRD';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFRD = 'F_FRD.TIVFRD';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQFRD = 'F_FRD.REQFRD';

    /** @var string Teléfono */
    public const PTEFRD = 'F_FRD.PTEFRD';

    /** @var string Neto 1 */
    public const NET1FRD = 'F_FRD.NET1FRD';

    /** @var string Neto 2 */
    public const NET2FRD = 'F_FRD.NET2FRD';

    /** @var string Neto 3 */
    public const NET3FRD = 'F_FRD.NET3FRD';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FRD = 'F_FRD.PDTO1FRD';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FRD = 'F_FRD.PDTO2FRD';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FRD = 'F_FRD.PDTO3FRD';

    /** @var string Importe de descuento 1 */
    public const IDTO1FRD = 'F_FRD.IDTO1FRD';

    /** @var string Importe de descuento 2 */
    public const IDTO2FRD = 'F_FRD.IDTO2FRD';

    /** @var string Importe de descuento 3 */
    public const IDTO3FRD = 'F_FRD.IDTO3FRD';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FRD = 'F_FRD.PPPA1FRD';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FRD = 'F_FRD.PPPA2FRD';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FRD = 'F_FRD.PPPA3FRD';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FRD = 'F_FRD.IPPA1FRD';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FRD = 'F_FRD.IPPA2FRD';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FRD = 'F_FRD.IPPA3FRD';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FRD = 'F_FRD.PPOR1FRD';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FRD = 'F_FRD.PPOR2FRD';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FRD = 'F_FRD.PPOR3FRD';

    /** @var string Importe de portes 1 */
    public const IPOR1FRD = 'F_FRD.IPOR1FRD';

    /** @var string Importe de portes 2 */
    public const IPOR2FRD = 'F_FRD.IPOR2FRD';

    /** @var string Importe de portes 3 */
    public const IPOR3FRD = 'F_FRD.IPOR3FRD';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FRD = 'F_FRD.PFIN1FRD';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FRD = 'F_FRD.PFIN2FRD';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FRD = 'F_FRD.PFIN3FRD';

    /** @var string Importe de financiación 1 */
    public const IFIN1FRD = 'F_FRD.IFIN1FRD';

    /** @var string Importe de financiación 2 */
    public const IFIN2FRD = 'F_FRD.IFIN2FRD';

    /** @var string Importe de financiación 3 */
    public const IFIN3FRD = 'F_FRD.IFIN3FRD';

    /** @var string Base imponible 1 */
    public const BAS1FRD = 'F_FRD.BAS1FRD';

    /** @var string Base imponible 2 */
    public const BAS2FRD = 'F_FRD.BAS2FRD';

    /** @var string Base imponible 3 */
    public const BAS3FRD = 'F_FRD.BAS3FRD';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FRD = 'F_FRD.PIVA1FRD';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FRD = 'F_FRD.PIVA2FRD';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FRD = 'F_FRD.PIVA3FRD';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FRD = 'F_FRD.IIVA1FRD';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FRD = 'F_FRD.IIVA2FRD';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FRD = 'F_FRD.IIVA3FRD';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FRD = 'F_FRD.PREC1FRD';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FRD = 'F_FRD.PREC2FRD';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FRD = 'F_FRD.PREC3FRD';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FRD = 'F_FRD.IREC1FRD';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FRD = 'F_FRD.IREC2FRD';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FRD = 'F_FRD.IREC3FRD';

    /** @var string Porcentaje de retención */
    public const PRET1FRD = 'F_FRD.PRET1FRD';

    /** @var string Importe de retención */
    public const IRET1FRD = 'F_FRD.IRET1FRD';

    /** @var string Total */
    public const TOTFRD = 'F_FRD.TOTFRD';

    /** @var string Forma de pago */
    public const FOPFRD = 'F_FRD.FOPFRD';

    /** @var string Línea 1 de observaciones */
    public const OB1FRD = 'F_FRD.OB1FRD';

    /** @var string Línea 2 de observaciones */
    public const OB2FRD = 'F_FRD.OB2FRD';

    /** @var string Agencia de transportes */
    public const TRAFRD = 'F_FRD.TRAFRD';

    /** @var string Fecha de entrega */
    public const FENFRD = 'F_FRD.FENFRD';

    /** @var string Hora de entrega */
    public const HORFRD = 'F_FRD.HORFRD';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTFRD = 'F_FRD.PRTFRD';

    /** @var string Portes (texto) */
    public const TPOFRD = 'F_FRD.TPOFRD';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TPSFRD = 'F_FRD.TPSFRD';

    /** @var string [E]Vencimientos de la factura recibida */
    public const VENFRD = 'F_FRD.VENFRD';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMFRD = 'F_FRD.COMFRD';

    /** @var string [E]TIPO DE LA FACTURA DEVUELTA */
    public const TFDFRD = 'F_FRD.TFDFRD';

    /** @var string [E]CODIGO DE LA FACTURA DEVUELTA */
    public const CFDFRD = 'F_FRD.CFDFRD';

    /** @var string Almacén */
    public const ALMFRD = 'F_FRD.ALMFRD';

    /** @var string Código del usuario que creó el documento */
    public const USUFRD = 'F_FRD.USUFRD';

    /** @var string Código del último usuario que modificó el documento */
    public const USMFRD = 'F_FRD.USMFRD';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FRD = 'F_FRD.NET4FRD';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FRD = 'F_FRD.PDTO4FRD';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FRD = 'F_FRD.IDTO4FRD';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FRD = 'F_FRD.PPPA4FRD';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FRD = 'F_FRD.IPPA4FRD';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FRD = 'F_FRD.PPOR4FRD';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FRD = 'F_FRD.IPOR4FRD';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FRD = 'F_FRD.PFIN4FRD';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FRD = 'F_FRD.IFIN4FRD';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FRD = 'F_FRD.BAS4FRD';

    /** @var string [E]Enviado por e-mail */
    public const EMAFRD = 'F_FRD.EMAFRD';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFRD = 'F_FRD.PASFRD';

    /** @var string E-mail de destino */
    public const PEMFRD = 'F_FRD.PEMFRD';

    /** @var string País del proveedor */
    public const PPAFRD = 'F_FRD.PPAFRD';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FRD = 'F_FRD.TIVA1FRD';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FRD = 'F_FRD.TIVA2FRD';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FRD = 'F_FRD.TIVA3FRD';
}
