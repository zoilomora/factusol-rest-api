<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FRD
{
    public const TABLE_NAME = 'F_FRD';

    /** @var string Nº de serie */
    public const TIPFRD = 'TIPFRD';

    /** @var string [F=000000]Código */
    public const CODFRD = 'CODFRD';

    /** @var string Código de factura */
    public const FACFRD = 'FACFRD';

    /** @var string Referencia */
    public const REFFRD = 'REFFRD';

    /** @var string Fecha */
    public const FECFRD = 'FECFRD';

    /** @var string [F=00000]Proveedor */
    public const PROFRD = 'PROFRD';

    /** @var string Estado */
    public const ESTFRD = 'ESTFRD';

    /** @var string Cliente del proveedor */
    public const CLIFRD = 'CLIFRD';

    /** @var string Nombre */
    public const PNOFRD = 'PNOFRD';

    /** @var string Domicilio */
    public const PDOFRD = 'PDOFRD';

    /** @var string Población */
    public const PPOFRD = 'PPOFRD';

    /** @var string Cód. Postal */
    public const PCPFRD = 'PCPFRD';

    /** @var string Provincia */
    public const PPRFRD = 'PPRFRD';

    /** @var string N.I.F. */
    public const PNIFRD = 'PNIFRD';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFRD = 'TIVFRD';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQFRD = 'REQFRD';

    /** @var string Teléfono */
    public const PTEFRD = 'PTEFRD';

    /** @var string Neto 1 */
    public const NET1FRD = 'NET1FRD';

    /** @var string Neto 2 */
    public const NET2FRD = 'NET2FRD';

    /** @var string Neto 3 */
    public const NET3FRD = 'NET3FRD';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FRD = 'PDTO1FRD';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FRD = 'PDTO2FRD';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FRD = 'PDTO3FRD';

    /** @var string Importe de descuento 1 */
    public const IDTO1FRD = 'IDTO1FRD';

    /** @var string Importe de descuento 2 */
    public const IDTO2FRD = 'IDTO2FRD';

    /** @var string Importe de descuento 3 */
    public const IDTO3FRD = 'IDTO3FRD';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FRD = 'PPPA1FRD';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FRD = 'PPPA2FRD';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FRD = 'PPPA3FRD';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FRD = 'IPPA1FRD';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FRD = 'IPPA2FRD';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FRD = 'IPPA3FRD';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FRD = 'PPOR1FRD';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FRD = 'PPOR2FRD';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FRD = 'PPOR3FRD';

    /** @var string Importe de portes 1 */
    public const IPOR1FRD = 'IPOR1FRD';

    /** @var string Importe de portes 2 */
    public const IPOR2FRD = 'IPOR2FRD';

    /** @var string Importe de portes 3 */
    public const IPOR3FRD = 'IPOR3FRD';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FRD = 'PFIN1FRD';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FRD = 'PFIN2FRD';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FRD = 'PFIN3FRD';

    /** @var string Importe de financiación 1 */
    public const IFIN1FRD = 'IFIN1FRD';

    /** @var string Importe de financiación 2 */
    public const IFIN2FRD = 'IFIN2FRD';

    /** @var string Importe de financiación 3 */
    public const IFIN3FRD = 'IFIN3FRD';

    /** @var string Base imponible 1 */
    public const BAS1FRD = 'BAS1FRD';

    /** @var string Base imponible 2 */
    public const BAS2FRD = 'BAS2FRD';

    /** @var string Base imponible 3 */
    public const BAS3FRD = 'BAS3FRD';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FRD = 'PIVA1FRD';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FRD = 'PIVA2FRD';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FRD = 'PIVA3FRD';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FRD = 'IIVA1FRD';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FRD = 'IIVA2FRD';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FRD = 'IIVA3FRD';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FRD = 'PREC1FRD';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FRD = 'PREC2FRD';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FRD = 'PREC3FRD';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FRD = 'IREC1FRD';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FRD = 'IREC2FRD';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FRD = 'IREC3FRD';

    /** @var string Porcentaje de retención */
    public const PRET1FRD = 'PRET1FRD';

    /** @var string Importe de retención */
    public const IRET1FRD = 'IRET1FRD';

    /** @var string Total */
    public const TOTFRD = 'TOTFRD';

    /** @var string Forma de pago */
    public const FOPFRD = 'FOPFRD';

    /** @var string Línea 1 de observaciones */
    public const OB1FRD = 'OB1FRD';

    /** @var string Línea 2 de observaciones */
    public const OB2FRD = 'OB2FRD';

    /** @var string Agencia de transportes */
    public const TRAFRD = 'TRAFRD';

    /** @var string Fecha de entrega */
    public const FENFRD = 'FENFRD';

    /** @var string Hora de entrega */
    public const HORFRD = 'HORFRD';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTFRD = 'PRTFRD';

    /** @var string Portes (texto) */
    public const TPOFRD = 'TPOFRD';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TPSFRD = 'TPSFRD';

    /** @var string [E]Vencimientos de la factura recibida */
    public const VENFRD = 'VENFRD';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMFRD = 'COMFRD';

    /** @var string [E]TIPO DE LA FACTURA DEVUELTA */
    public const TFDFRD = 'TFDFRD';

    /** @var string [E]CODIGO DE LA FACTURA DEVUELTA */
    public const CFDFRD = 'CFDFRD';

    /** @var string Almacén */
    public const ALMFRD = 'ALMFRD';

    /** @var string Código del usuario que creó el documento */
    public const USUFRD = 'USUFRD';

    /** @var string Código del último usuario que modificó el documento */
    public const USMFRD = 'USMFRD';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FRD = 'NET4FRD';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FRD = 'PDTO4FRD';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FRD = 'IDTO4FRD';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FRD = 'PPPA4FRD';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FRD = 'IPPA4FRD';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FRD = 'PPOR4FRD';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FRD = 'IPOR4FRD';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FRD = 'PFIN4FRD';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FRD = 'IFIN4FRD';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FRD = 'BAS4FRD';

    /** @var string [E]Enviado por e-mail */
    public const EMAFRD = 'EMAFRD';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFRD = 'PASFRD';

    /** @var string E-mail de destino */
    public const PEMFRD = 'PEMFRD';

    /** @var string País del proveedor */
    public const PPAFRD = 'PPAFRD';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FRD = 'TIVA1FRD';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FRD = 'TIVA2FRD';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FRD = 'TIVA3FRD';
}
