<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FAC
{
    public const TABLE_NAME = 'F_FAC';

    /** @var string Nº de serie */
    public const TIPFAC = 'F_FAC.TIPFAC';

    /** @var string [F=000000]Código */
    public const CODFAC = 'F_FAC.CODFAC';

    /** @var string Referencia */
    public const REFFAC = 'F_FAC.REFFAC';

    /** @var string Fecha */
    public const FECFAC = 'F_FAC.FECFAC';

    /** @var string [L=#0;Pte.#1;Pte. Parcial#2;Cobrada#3;Devuelta#4;Anulada]Estado */
    public const ESTFAC = 'F_FAC.ESTFAC';

    /** @var string Almacén */
    public const ALMFAC = 'F_FAC.ALMFAC';

    /** @var string [F=00000]Agente */
    public const AGEFAC = 'F_FAC.AGEFAC';

    /** @var string Proveedor del cliente */
    public const PROFAC = 'F_FAC.PROFAC';

    /** @var string [F=00000]Cliente */
    public const CLIFAC = 'F_FAC.CLIFAC';

    /** @var string Nombre */
    public const CNOFAC = 'F_FAC.CNOFAC';

    /** @var string Domicilio */
    public const CDOFAC = 'F_FAC.CDOFAC';

    /** @var string Población */
    public const CPOFAC = 'F_FAC.CPOFAC';

    /** @var string Cód. Postal */
    public const CCPFAC = 'F_FAC.CCPFAC';

    /** @var string Provincia */
    public const CPRFAC = 'F_FAC.CPRFAC';

    /** @var string N.I.F. */
    public const CNIFAC = 'F_FAC.CNIFAC';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFAC = 'F_FAC.TIVFAC';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQFAC = 'F_FAC.REQFAC';

    /** @var string Teléfono */
    public const TELFAC = 'F_FAC.TELFAC';

    /** @var string Neto 1 */
    public const NET1FAC = 'F_FAC.NET1FAC';

    /** @var string Neto 2 */
    public const NET2FAC = 'F_FAC.NET2FAC';

    /** @var string Neto 3 */
    public const NET3FAC = 'F_FAC.NET3FAC';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FAC = 'F_FAC.PDTO1FAC';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FAC = 'F_FAC.PDTO2FAC';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FAC = 'F_FAC.PDTO3FAC';

    /** @var string Importe de descuento 1 */
    public const IDTO1FAC = 'F_FAC.IDTO1FAC';

    /** @var string Importe de descuento 2 */
    public const IDTO2FAC = 'F_FAC.IDTO2FAC';

    /** @var string Importe de descuento 3 */
    public const IDTO3FAC = 'F_FAC.IDTO3FAC';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FAC = 'F_FAC.PPPA1FAC';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FAC = 'F_FAC.PPPA2FAC';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FAC = 'F_FAC.PPPA3FAC';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FAC = 'F_FAC.IPPA1FAC';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FAC = 'F_FAC.IPPA2FAC';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FAC = 'F_FAC.IPPA3FAC';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FAC = 'F_FAC.PPOR1FAC';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FAC = 'F_FAC.PPOR2FAC';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FAC = 'F_FAC.PPOR3FAC';

    /** @var string Importe de portes 1 */
    public const IPOR1FAC = 'F_FAC.IPOR1FAC';

    /** @var string Importe de portes 2 */
    public const IPOR2FAC = 'F_FAC.IPOR2FAC';

    /** @var string Importe de portes 3 */
    public const IPOR3FAC = 'F_FAC.IPOR3FAC';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FAC = 'F_FAC.PFIN1FAC';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FAC = 'F_FAC.PFIN2FAC';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FAC = 'F_FAC.PFIN3FAC';

    /** @var string Importe de financiación 1 */
    public const IFIN1FAC = 'F_FAC.IFIN1FAC';

    /** @var string Importe de financiación 2 */
    public const IFIN2FAC = 'F_FAC.IFIN2FAC';

    /** @var string Importe de financiación 3 */
    public const IFIN3FAC = 'F_FAC.IFIN3FAC';

    /** @var string Base imponible 1 */
    public const BAS1FAC = 'F_FAC.BAS1FAC';

    /** @var string Base imponible 2 */
    public const BAS2FAC = 'F_FAC.BAS2FAC';

    /** @var string Base imponible 3 */
    public const BAS3FAC = 'F_FAC.BAS3FAC';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FAC = 'F_FAC.PIVA1FAC';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FAC = 'F_FAC.PIVA2FAC';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FAC = 'F_FAC.PIVA3FAC';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FAC = 'F_FAC.IIVA1FAC';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FAC = 'F_FAC.IIVA2FAC';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FAC = 'F_FAC.IIVA3FAC';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FAC = 'F_FAC.PREC1FAC';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FAC = 'F_FAC.PREC2FAC';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FAC = 'F_FAC.PREC3FAC';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FAC = 'F_FAC.IREC1FAC';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FAC = 'F_FAC.IREC2FAC';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FAC = 'F_FAC.IREC3FAC';

    /** @var string Porcentaje de retención */
    public const PRET1FAC = 'F_FAC.PRET1FAC';

    /** @var string Importe de retención */
    public const IRET1FAC = 'F_FAC.IRET1FAC';

    /** @var string Total */
    public const TOTFAC = 'F_FAC.TOTFAC';

    /** @var string Forma de pago */
    public const FOPFAC = 'F_FAC.FOPFAC';

    /** @var string [L=#0;Pagados#1;Debidos]Portes */
    public const PRTFAC = 'F_FAC.PRTFAC';

    /** @var string Portes (texto) */
    public const TPOFAC = 'F_FAC.TPOFAC';

    /** @var string Línea 1 de observaciones */
    public const OB1FAC = 'F_FAC.OB1FAC';

    /** @var string Línea 2 de observaciones */
    public const OB2FAC = 'F_FAC.OB2FAC';

    /** @var string Nº de serie documento rectificado */
    public const TDRFAC = 'F_FAC.TDRFAC';

    /** @var string [F=000000]Código del documento rectificado */
    public const CDRFAC = 'F_FAC.CDRFAC';

    /** @var string Código de la dirección de entrega */
    public const OBRFAC = 'F_FAC.OBRFAC';

    /** @var string Remitido por */
    public const REPFAC = 'F_FAC.REPFAC';

    /** @var string Embalado por */
    public const EMBFAC = 'F_FAC.EMBFAC';

    /** @var string A la antención de */
    public const AATFAC = 'F_FAC.AATFAC';

    /** @var string Referencia */
    public const REAFAC = 'F_FAC.REAFAC';

    /** @var string Nº de su pedido */
    public const PEDFAC = 'F_FAC.PEDFAC';

    /** @var string Fecha de su pedido */
    public const FPEFAC = 'F_FAC.FPEFAC';

    /** @var string [L=#0;Pendiente#1;Girado]Recibo */
    public const COBFAC = 'F_FAC.COBFAC';

    /** @var string [E]Tipo de creacion */
    public const CREFAC = 'F_FAC.CREFAC';

    /** @var string [E]Tipo del recibo que se crea a partir de esta factura */
    public const TIRFAC = 'F_FAC.TIRFAC';

    /** @var string [E]Codigo del recibo que se crea a partir de esta factura */
    public const CORFAC = 'F_FAC.CORFAC';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRAFAC = 'F_FAC.TRAFAC';

    /** @var string [E]Vencimientos de la factura */
    public const VENFAC = 'F_FAC.VENFAC';

    /** @var string [E]CAMPO PARA ANOTACIONES PRIVADAS DEL DOCUMENTO */
    public const PRIFAC = 'F_FAC.PRIFAC';

    /** @var string [E]DOCUMENTOS EXTERNOS ASOCIADOS AL DOCUMENTO. */
    public const ASOFAC = 'F_FAC.ASOFAC';

    /** @var string [E]Impresa */
    public const IMPFAC = 'F_FAC.IMPFAC';

    /** @var string Código del banco auxiliar del cliente */
    public const CBAFAC = 'F_FAC.CBAFAC';

    /** @var string [F=hh:mm]Hora */
    public const HORFAC = 'F_FAC.HORFAC';

    /** @var string [E]COMENTARIOS PARA IMPRIMIR AL FINAL DE LAS LÍNEAS DE DETALLE */
    public const COMFAC = 'F_FAC.COMFAC';

    /** @var string Código del usuario que creó el documento */
    public const USUFAC = 'F_FAC.USUFAC';

    /** @var string Código del último usuario que modificó el documento */
    public const USMFAC = 'F_FAC.USMFAC';

    /** @var string Fax */
    public const FAXFAC = 'F_FAC.FAXFAC';

    /** @var string [E]IMAGEN DE LA FACTURA */
    public const IMGFAC = 'F_FAC.IMGFAC';

    /** @var string [E]EFECTIVO COBRADO DE LA FACTURA (PARA TPV) */
    public const EFEFAC = 'F_FAC.EFEFAC';

    /** @var string [E]CAMBIO DE LA FACTURA */
    public const CAMFAC = 'F_FAC.CAMFAC';

    /** @var string [F=000]Código del transportista */
    public const TRNFAC = 'F_FAC.TRNFAC';

    /** @var string Nº de expedición 1 (transporte) */
    public const CISFAC = 'F_FAC.CISFAC';

    /** @var string Nº de expedición 2 (transporte) */
    public const TRCFAC = 'F_FAC.TRCFAC';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FAC = 'F_FAC.NET4FAC';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FAC = 'F_FAC.PDTO4FAC';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FAC = 'F_FAC.IDTO4FAC';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FAC = 'F_FAC.PPPA4FAC';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FAC = 'F_FAC.IPPA4FAC';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FAC = 'F_FAC.PPOR4FAC';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FAC = 'F_FAC.IPOR4FAC';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FAC = 'F_FAC.PFIN4FAC';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FAC = 'F_FAC.IFIN4FAC';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FAC = 'F_FAC.BAS4FAC';

    /** @var string [E]Enviado por e-mail */
    public const EMAFAC = 'F_FAC.EMAFAC';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFAC = 'F_FAC.PASFAC';

    /** @var string [E]Ticket, porcentaje de descuento */
    public const TPDFAC = 'F_FAC.TPDFAC';

    /** @var string [E]Ticket, importe de descuento */
    public const TIDFAC = 'F_FAC.TIDFAC';

    /** @var string Código 1KB: Actividad de la factura */
    public const A1KFAC = 'F_FAC.A1KFAC';

    /** @var string E-mail de destino */
    public const CEMFAC = 'F_FAC.CEMFAC';

    /** @var string País del cliente */
    public const CPAFAC = 'F_FAC.CPAFAC';

    /** @var string Nombre del banco */
    public const BNOFAC = 'F_FAC.BNOFAC';

    /** @var string Banco: Entidad */
    public const BENFAC = 'F_FAC.BENFAC';

    /** @var string Banco: Oficina */
    public const BOFFAC = 'F_FAC.BOFFAC';

    /** @var string Banco: DC */
    public const BDCFAC = 'F_FAC.BDCFAC';

    /** @var string Banco: Cuenta */
    public const BNUFAC = 'F_FAC.BNUFAC';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FAC = 'F_FAC.TIVA1FAC';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FAC = 'F_FAC.TIVA2FAC';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FAC = 'F_FAC.TIVA3FAC';

    /** @var string Régimen especial del criterio de caja */
    public const RCCFAC = 'F_FAC.RCCFAC';

    /** @var string Banco: Código IBAN */
    public const BIBFAC = 'F_FAC.BIBFAC';

    /** @var string Banco: Código BIC */
    public const BICFAC = 'F_FAC.BICFAC';

    /** @var string Entregado en segunda forma de pago (para TPV) */
    public const EFSFAC = 'F_FAC.EFSFAC';

    /** @var string Entregado en vales (para TPV) */
    public const EFVFAC = 'F_FAC.EFVFAC';

    /** @var string Factura con impuestos en país de residencia */
    public const CIEFAC = 'F_FAC.CIEFAC';

    public const GFEFAC = 'F_FAC.GFEFAC';

    public const TIFFAC = 'F_FAC.TIFFAC';

    public const TPVIDFAC = 'F_FAC.TPVIDFAC';

    public const TERFAC = 'F_FAC.TERFAC';

    public const COPFAC = 'F_FAC.COPFAC';

    public const TFIFAC = 'F_FAC.TFIFAC';

    public const TFAFAC = 'F_FAC.TFAFAC';

    public const TREFAC = 'F_FAC.TREFAC';

    public const CVIFAC = 'F_FAC.CVIFAC';

    public const DEPFAC = 'F_FAC.DEPFAC';

    public const FROFAC = 'F_FAC.FROFAC';

    public const NASFAC = 'F_FAC.NASFAC';
}
