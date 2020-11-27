<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FRE
{
    public const TABLE_NAME = 'F_FRE';

    /** @var string Nº de serie */
    public const TIPFRE = 'TIPFRE';

    /** @var string [F=000000]Código */
    public const CODFRE = 'CODFRE';

    /** @var string Código de factura */
    public const FACFRE = 'FACFRE';

    /** @var string Referencia */
    public const REFFRE = 'REFFRE';

    /** @var string Fecha */
    public const FECFRE = 'FECFRE';

    /** @var string [F=00000]Proveedor */
    public const PROFRE = 'PROFRE';

    /** @var string [L=#0;Pte.#1;Pag. Parcial#2;Pagada]Estado */
    public const ESTFRE = 'ESTFRE';

    /** @var string Cliente del proveedor */
    public const CLIFRE = 'CLIFRE';

    /** @var string Nombre */
    public const PNOFRE = 'PNOFRE';

    /** @var string Domicilio */
    public const PDOFRE = 'PDOFRE';

    /** @var string Población */
    public const PPOFRE = 'PPOFRE';

    /** @var string Cód. Postal */
    public const PCPFRE = 'PCPFRE';

    /** @var string Provincia */
    public const PPRFRE = 'PPRFRE';

    /** @var string N.I.F. */
    public const PNIFRE = 'PNIFRE';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFRE = 'TIVFRE';

    /** @var string [L=#0;No#1;Sí]Recargo de equivalencia */
    public const REQFRE = 'REQFRE';

    /** @var string Teléfono */
    public const PTEFRE = 'PTEFRE';

    /** @var string Neto 1 */
    public const NET1FRE = 'NET1FRE';

    /** @var string Neto 2 */
    public const NET2FRE = 'NET2FRE';

    /** @var string Neto 3 */
    public const NET3FRE = 'NET3FRE';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FRE = 'PDTO1FRE';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FRE = 'PDTO2FRE';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FRE = 'PDTO3FRE';

    /** @var string Importe de descuento 1 */
    public const IDTO1FRE = 'IDTO1FRE';

    /** @var string Importe de descuento 2 */
    public const IDTO2FRE = 'IDTO2FRE';

    /** @var string Importe de descuento 3 */
    public const IDTO3FRE = 'IDTO3FRE';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FRE = 'PPPA1FRE';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FRE = 'PPPA2FRE';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FRE = 'PPPA3FRE';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FRE = 'IPPA1FRE';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FRE = 'IPPA2FRE';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FRE = 'IPPA3FRE';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FRE = 'PPOR1FRE';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FRE = 'PPOR2FRE';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FRE = 'PPOR3FRE';

    /** @var string Importe de portes 1 */
    public const IPOR1FRE = 'IPOR1FRE';

    /** @var string Importe de portes 2 */
    public const IPOR2FRE = 'IPOR2FRE';

    /** @var string Importe de portes 3 */
    public const IPOR3FRE = 'IPOR3FRE';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FRE = 'PFIN1FRE';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FRE = 'PFIN2FRE';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FRE = 'PFIN3FRE';

    /** @var string Importe de financiación 1 */
    public const IFIN1FRE = 'IFIN1FRE';

    /** @var string Importe de financiación 2 */
    public const IFIN2FRE = 'IFIN2FRE';

    /** @var string Importe de financiación 3 */
    public const IFIN3FRE = 'IFIN3FRE';

    /** @var string Base imponible 1 */
    public const BAS1FRE = 'BAS1FRE';

    /** @var string Base imponible 2 */
    public const BAS2FRE = 'BAS2FRE';

    /** @var string Base imponible 3 */
    public const BAS3FRE = 'BAS3FRE';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FRE = 'PIVA1FRE';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FRE = 'PIVA2FRE';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FRE = 'PIVA3FRE';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FRE = 'IIVA1FRE';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FRE = 'IIVA2FRE';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FRE = 'IIVA3FRE';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FRE = 'PREC1FRE';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FRE = 'PREC2FRE';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FRE = 'PREC3FRE';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FRE = 'IREC1FRE';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FRE = 'IREC2FRE';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FRE = 'IREC3FRE';

    /** @var string Porcentaje de retención */
    public const PRET1FRE = 'PRET1FRE';

    /** @var string Importe de retención */
    public const IRET1FRE = 'IRET1FRE';

    /** @var string Total */
    public const TOTFRE = 'TOTFRE';

    /** @var string Forma de pago */
    public const FOPFRE = 'FOPFRE';

    /** @var string Línea 1 de observaciones */
    public const OB1FRE = 'OB1FRE';

    /** @var string Línea 2 de observaciones */
    public const OB2FRE = 'OB2FRE';

    /** @var string Agencia de transportes */
    public const TRAFRE = 'TRAFRE';

    /** @var string Fecha de entrega */
    public const FENFRE = 'FENFRE';

    /** @var string Hora de entrega */
    public const HORFRE = 'HORFRE';

    /** @var string [L=#0;Pagados#1;Debidos]Portes */
    public const PRTFRE = 'PRTFRE';

    /** @var string Portes (texto) */
    public const TPOFRE = 'TPOFRE';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TPSFRE = 'TPSFRE';

    /** @var string [E]Vencimientos de la factura recibida */
    public const VENFRE = 'VENFRE';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMFRE = 'COMFRE';

    /** @var string [L=#0;Deducible#1;No deducible#2;Prorrata]Tipo */
    public const DEDFRE = 'DEDFRE';

    /** @var string Código del usuario que creó el documento */
    public const USUFRE = 'USUFRE';

    /** @var string Código del último ususario que modificó el documento */
    public const USMFRE = 'USMFRE';

    /** @var string Almacén */
    public const ALMFRE = 'ALMFRE';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FRE = 'NET4FRE';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FRE = 'PDTO4FRE';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FRE = 'IDTO4FRE';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FRE = 'PPPA4FRE';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FRE = 'IPPA4FRE';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FRE = 'PPOR4FRE';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FRE = 'IPOR4FRE';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FRE = 'PFIN4FRE';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FRE = 'IFIN4FRE';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FRE = 'BAS4FRE';

    /** @var string [E]Enviado por e-mail */
    public const EMAFRE = 'EMAFRE';

    /** @var string [E]Tipo de proveedor (0 = Proveedor, 1 = Acreedor) */
    public const POAFRE = 'POAFRE';

    /** @var string [L=#0;No#1;Sí]Bien de inversión */
    public const BINFRE = 'BINFRE';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFRE = 'PASFRE';

    /** @var string [E]Imagen de la factura recibida */
    public const IMGFRE = 'IMGFRE';

    /** @var string E-mail de destino */
    public const PEMFRE = 'PEMFRE';

    /** @var string País del proveedor */
    public const PPAFRE = 'PPAFRE';

    /** @var string Porcentaje de deducción de la factura */
    public const PDEFRE = 'PDEFRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FRE = 'TIVA1FRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FRE = 'TIVA2FRE';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FRE = 'TIVA3FRE';

    /** @var string [E]Tipo de retención de la factura recibida */
    public const TREFRE = 'TREFRE';

    /** @var string Régimen especial del criterio de caja */
    public const RCCFRE = 'RCCFRE';

    /** @var string Tipo de factura */
    public const TIFFRE = 'TIFFRE';

    public const COPFRE = 'COPFRE';

    public const FROFRE = 'FROFRE';

    public const FRCFRE = 'FRCFRE';

    public const CVIFRE = 'CVIFRE';
}
