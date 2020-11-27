<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FRE
{
    public const TABLE_NAME = 'F_FRE';

    /** @var string Nº de serie */
    public const TIPFRE = 'F_FRE.TIPFRE';

    /** @var string [F=000000]Código */
    public const CODFRE = 'F_FRE.CODFRE';

    /** @var string Código de factura */
    public const FACFRE = 'F_FRE.FACFRE';

    /** @var string Referencia */
    public const REFFRE = 'F_FRE.REFFRE';

    /** @var string Fecha */
    public const FECFRE = 'F_FRE.FECFRE';

    /** @var string [F=00000]Proveedor */
    public const PROFRE = 'F_FRE.PROFRE';

    /** @var string [L=#0;Pte.#1;Pag. Parcial#2;Pagada]Estado */
    public const ESTFRE = 'F_FRE.ESTFRE';

    /** @var string Cliente del proveedor */
    public const CLIFRE = 'F_FRE.CLIFRE';

    /** @var string Nombre */
    public const PNOFRE = 'F_FRE.PNOFRE';

    /** @var string Domicilio */
    public const PDOFRE = 'F_FRE.PDOFRE';

    /** @var string Población */
    public const PPOFRE = 'F_FRE.PPOFRE';

    /** @var string Cód. Postal */
    public const PCPFRE = 'F_FRE.PCPFRE';

    /** @var string Provincia */
    public const PPRFRE = 'F_FRE.PPRFRE';

    /** @var string N.I.F. */
    public const PNIFRE = 'F_FRE.PNIFRE';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFRE = 'F_FRE.TIVFRE';

    /** @var string [L=#0;No#1;Sí]Recargo de equivalencia */
    public const REQFRE = 'F_FRE.REQFRE';

    /** @var string Teléfono */
    public const PTEFRE = 'F_FRE.PTEFRE';

    /** @var string Neto 1 */
    public const NET1FRE = 'F_FRE.NET1FRE';

    /** @var string Neto 2 */
    public const NET2FRE = 'F_FRE.NET2FRE';

    /** @var string Neto 3 */
    public const NET3FRE = 'F_FRE.NET3FRE';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FRE = 'F_FRE.PDTO1FRE';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FRE = 'F_FRE.PDTO2FRE';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FRE = 'F_FRE.PDTO3FRE';

    /** @var string Importe de descuento 1 */
    public const IDTO1FRE = 'F_FRE.IDTO1FRE';

    /** @var string Importe de descuento 2 */
    public const IDTO2FRE = 'F_FRE.IDTO2FRE';

    /** @var string Importe de descuento 3 */
    public const IDTO3FRE = 'F_FRE.IDTO3FRE';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FRE = 'F_FRE.PPPA1FRE';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FRE = 'F_FRE.PPPA2FRE';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FRE = 'F_FRE.PPPA3FRE';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FRE = 'F_FRE.IPPA1FRE';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FRE = 'F_FRE.IPPA2FRE';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FRE = 'F_FRE.IPPA3FRE';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FRE = 'F_FRE.PPOR1FRE';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FRE = 'F_FRE.PPOR2FRE';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FRE = 'F_FRE.PPOR3FRE';

    /** @var string Importe de portes 1 */
    public const IPOR1FRE = 'F_FRE.IPOR1FRE';

    /** @var string Importe de portes 2 */
    public const IPOR2FRE = 'F_FRE.IPOR2FRE';

    /** @var string Importe de portes 3 */
    public const IPOR3FRE = 'F_FRE.IPOR3FRE';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FRE = 'F_FRE.PFIN1FRE';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FRE = 'F_FRE.PFIN2FRE';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FRE = 'F_FRE.PFIN3FRE';

    /** @var string Importe de financiación 1 */
    public const IFIN1FRE = 'F_FRE.IFIN1FRE';

    /** @var string Importe de financiación 2 */
    public const IFIN2FRE = 'F_FRE.IFIN2FRE';

    /** @var string Importe de financiación 3 */
    public const IFIN3FRE = 'F_FRE.IFIN3FRE';

    /** @var string Base imponible 1 */
    public const BAS1FRE = 'F_FRE.BAS1FRE';

    /** @var string Base imponible 2 */
    public const BAS2FRE = 'F_FRE.BAS2FRE';

    /** @var string Base imponible 3 */
    public const BAS3FRE = 'F_FRE.BAS3FRE';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FRE = 'F_FRE.PIVA1FRE';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FRE = 'F_FRE.PIVA2FRE';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FRE = 'F_FRE.PIVA3FRE';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FRE = 'F_FRE.IIVA1FRE';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FRE = 'F_FRE.IIVA2FRE';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FRE = 'F_FRE.IIVA3FRE';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FRE = 'F_FRE.PREC1FRE';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FRE = 'F_FRE.PREC2FRE';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FRE = 'F_FRE.PREC3FRE';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FRE = 'F_FRE.IREC1FRE';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FRE = 'F_FRE.IREC2FRE';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FRE = 'F_FRE.IREC3FRE';

    /** @var string Porcentaje de retención */
    public const PRET1FRE = 'F_FRE.PRET1FRE';

    /** @var string Importe de retención */
    public const IRET1FRE = 'F_FRE.IRET1FRE';

    /** @var string Total */
    public const TOTFRE = 'F_FRE.TOTFRE';

    /** @var string Forma de pago */
    public const FOPFRE = 'F_FRE.FOPFRE';

    /** @var string Línea 1 de observaciones */
    public const OB1FRE = 'F_FRE.OB1FRE';

    /** @var string Línea 2 de observaciones */
    public const OB2FRE = 'F_FRE.OB2FRE';

    /** @var string Agencia de transportes */
    public const TRAFRE = 'F_FRE.TRAFRE';

    /** @var string Fecha de entrega */
    public const FENFRE = 'F_FRE.FENFRE';

    /** @var string Hora de entrega */
    public const HORFRE = 'F_FRE.HORFRE';

    /** @var string [L=#0;Pagados#1;Debidos]Portes */
    public const PRTFRE = 'F_FRE.PRTFRE';

    /** @var string Portes (texto) */
    public const TPOFRE = 'F_FRE.TPOFRE';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TPSFRE = 'F_FRE.TPSFRE';

    /** @var string [E]Vencimientos de la factura recibida */
    public const VENFRE = 'F_FRE.VENFRE';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMFRE = 'F_FRE.COMFRE';

    /** @var string [L=#0;Deducible#1;No deducible#2;Prorrata]Tipo */
    public const DEDFRE = 'F_FRE.DEDFRE';

    /** @var string Código del usuario que creó el documento */
    public const USUFRE = 'F_FRE.USUFRE';

    /** @var string Código del último ususario que modificó el documento */
    public const USMFRE = 'F_FRE.USMFRE';

    /** @var string Almacén */
    public const ALMFRE = 'F_FRE.ALMFRE';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FRE = 'F_FRE.NET4FRE';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FRE = 'F_FRE.PDTO4FRE';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FRE = 'F_FRE.IDTO4FRE';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FRE = 'F_FRE.PPPA4FRE';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FRE = 'F_FRE.IPPA4FRE';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FRE = 'F_FRE.PPOR4FRE';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FRE = 'F_FRE.IPOR4FRE';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FRE = 'F_FRE.PFIN4FRE';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FRE = 'F_FRE.IFIN4FRE';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FRE = 'F_FRE.BAS4FRE';

    /** @var string [E]Enviado por e-mail */
    public const EMAFRE = 'F_FRE.EMAFRE';

    /** @var string [E]Tipo de proveedor (0 = Proveedor, 1 = Acreedor) */
    public const POAFRE = 'F_FRE.POAFRE';

    /** @var string [L=#0;No#1;Sí]Bien de inversión */
    public const BINFRE = 'F_FRE.BINFRE';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFRE = 'F_FRE.PASFRE';

    /** @var string [E]Imagen de la factura recibida */
    public const IMGFRE = 'F_FRE.IMGFRE';

    /** @var string E-mail de destino */
    public const PEMFRE = 'F_FRE.PEMFRE';

    /** @var string País del proveedor */
    public const PPAFRE = 'F_FRE.PPAFRE';

    /** @var string Porcentaje de deducción de la factura */
    public const PDEFRE = 'F_FRE.PDEFRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FRE = 'F_FRE.TIVA1FRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FRE = 'F_FRE.TIVA2FRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FRE = 'F_FRE.TIVA3FRE';

    /** @var string [E]Tipo de retención de la factura recibida */
    public const TREFRE = 'F_FRE.TREFRE';

    /** @var string Régimen especial del criterio de caja */
    public const RCCFRE = 'F_FRE.RCCFRE';

    /** @var string Tipo de factura */
    public const TIFFRE = 'F_FRE.TIFFRE';

    public const COPFRE = 'F_FRE.COPFRE';

    public const FROFRE = 'F_FRE.FROFRE';

    public const FRCFRE = 'F_FRE.FRCFRE';

    public const CVIFRE = 'F_FRE.CVIFRE';
}
