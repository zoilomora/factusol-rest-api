<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FAC
{
    public const TABLE_NAME = 'F_FAC';

    /** @var string Nº de serie */
    public const TIPFAC = 'TIPFAC';

    /** @var string [F=000000]Código */
    public const CODFAC = 'CODFAC';

    /** @var string Referencia */
    public const REFFAC = 'REFFAC';

    /** @var string Fecha */
    public const FECFAC = 'FECFAC';

    /** @var string [L=#0;Pte.#1;Pte. Parcial#2;Cobrada#3;Devuelta#4;Anulada]Estado */
    public const ESTFAC = 'ESTFAC';

    /** @var string Almacén */
    public const ALMFAC = 'ALMFAC';

    /** @var string [F=00000]Agente */
    public const AGEFAC = 'AGEFAC';

    /** @var string Proveedor del cliente */
    public const PROFAC = 'PROFAC';

    /** @var string [F=00000]Cliente */
    public const CLIFAC = 'CLIFAC';

    /** @var string Nombre */
    public const CNOFAC = 'CNOFAC';

    /** @var string Domicilio */
    public const CDOFAC = 'CDOFAC';

    /** @var string Población */
    public const CPOFAC = 'CPOFAC';

    /** @var string Cód. Postal */
    public const CCPFAC = 'CCPFAC';

    /** @var string Provincia */
    public const CPRFAC = 'CPRFAC';

    /** @var string N.I.F. */
    public const CNIFAC = 'CNIFAC';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFAC = 'TIVFAC';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQFAC = 'REQFAC';

    /** @var string Teléfono */
    public const TELFAC = 'TELFAC';

    /** @var string Neto 1 */
    public const NET1FAC = 'NET1FAC';

    /** @var string Neto 2 */
    public const NET2FAC = 'NET2FAC';

    /** @var string Neto 3 */
    public const NET3FAC = 'NET3FAC';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FAC = 'PDTO1FAC';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FAC = 'PDTO2FAC';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FAC = 'PDTO3FAC';

    /** @var string Importe de descuento 1 */
    public const IDTO1FAC = 'IDTO1FAC';

    /** @var string Importe de descuento 2 */
    public const IDTO2FAC = 'IDTO2FAC';

    /** @var string Importe de descuento 3 */
    public const IDTO3FAC = 'IDTO3FAC';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FAC = 'PPPA1FAC';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FAC = 'PPPA2FAC';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FAC = 'PPPA3FAC';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FAC = 'IPPA1FAC';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FAC = 'IPPA2FAC';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FAC = 'IPPA3FAC';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FAC = 'PPOR1FAC';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FAC = 'PPOR2FAC';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FAC = 'PPOR3FAC';

    /** @var string Importe de portes 1 */
    public const IPOR1FAC = 'IPOR1FAC';

    /** @var string Importe de portes 2 */
    public const IPOR2FAC = 'IPOR2FAC';

    /** @var string Importe de portes 3 */
    public const IPOR3FAC = 'IPOR3FAC';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FAC = 'PFIN1FAC';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FAC = 'PFIN2FAC';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FAC = 'PFIN3FAC';

    /** @var string Importe de financiación 1 */
    public const IFIN1FAC = 'IFIN1FAC';

    /** @var string Importe de financiación 2 */
    public const IFIN2FAC = 'IFIN2FAC';

    /** @var string Importe de financiación 3 */
    public const IFIN3FAC = 'IFIN3FAC';

    /** @var string Base imponible 1 */
    public const BAS1FAC = 'BAS1FAC';

    /** @var string Base imponible 2 */
    public const BAS2FAC = 'BAS2FAC';

    /** @var string Base imponible 3 */
    public const BAS3FAC = 'BAS3FAC';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FAC = 'PIVA1FAC';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FAC = 'PIVA2FAC';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FAC = 'PIVA3FAC';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FAC = 'IIVA1FAC';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FAC = 'IIVA2FAC';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FAC = 'IIVA3FAC';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FAC = 'PREC1FAC';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FAC = 'PREC2FAC';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FAC = 'PREC3FAC';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FAC = 'IREC1FAC';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FAC = 'IREC2FAC';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FAC = 'IREC3FAC';

    /** @var string Porcentaje de retención */
    public const PRET1FAC = 'PRET1FAC';

    /** @var string Importe de retención */
    public const IRET1FAC = 'IRET1FAC';

    /** @var string Total */
    public const TOTFAC = 'TOTFAC';

    /** @var string Forma de pago */
    public const FOPFAC = 'FOPFAC';

    /** @var string [L=#0;Pagados#1;Debidos]Portes */
    public const PRTFAC = 'PRTFAC';

    /** @var string Portes (texto) */
    public const TPOFAC = 'TPOFAC';

    /** @var string Línea 1 de observaciones */
    public const OB1FAC = 'OB1FAC';

    /** @var string Línea 2 de observaciones */
    public const OB2FAC = 'OB2FAC';

    /** @var string Nº de serie documento rectificado */
    public const TDRFAC = 'TDRFAC';

    /** @var string [F=000000]Código del documento rectificado */
    public const CDRFAC = 'CDRFAC';

    /** @var string Código de la dirección de entrega */
    public const OBRFAC = 'OBRFAC';

    /** @var string Remitido por */
    public const REPFAC = 'REPFAC';

    /** @var string Embalado por */
    public const EMBFAC = 'EMBFAC';

    /** @var string A la antención de */
    public const AATFAC = 'AATFAC';

    /** @var string Referencia */
    public const REAFAC = 'REAFAC';

    /** @var string Nº de su pedido */
    public const PEDFAC = 'PEDFAC';

    /** @var string Fecha de su pedido */
    public const FPEFAC = 'FPEFAC';

    /** @var string [L=#0;Pendiente#1;Girado]Recibo */
    public const COBFAC = 'COBFAC';

    /** @var string [E]Tipo de creacion */
    public const CREFAC = 'CREFAC';

    /** @var string [E]Tipo del recibo que se crea a partir de esta factura */
    public const TIRFAC = 'TIRFAC';

    /** @var string [E]Codigo del recibo que se crea a partir de esta factura */
    public const CORFAC = 'CORFAC';

    /** @var string [L=#0;No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRAFAC = 'TRAFAC';

    /** @var string [E]Vencimientos de la factura */
    public const VENFAC = 'VENFAC';

    /** @var string [E]CAMPO PARA ANOTACIONES PRIVADAS DEL DOCUMENTO */
    public const PRIFAC = 'PRIFAC';

    /** @var string [E]DOCUMENTOS EXTERNOS ASOCIADOS AL DOCUMENTO. */
    public const ASOFAC = 'ASOFAC';

    /** @var string [E]Impresa */
    public const IMPFAC = 'IMPFAC';

    /** @var string Código del banco auxiliar del cliente */
    public const CBAFAC = 'CBAFAC';

    /** @var string [F=hh:mm]Hora */
    public const HORFAC = 'HORFAC';

    /** @var string [E]COMENTARIOS PARA IMPRIMIR AL FINAL DE LAS LÍNEAS DE DETALLE */
    public const COMFAC = 'COMFAC';

    /** @var string Código del usuario que creó el documento */
    public const USUFAC = 'USUFAC';

    /** @var string Código del último usuario que modificó el documento */
    public const USMFAC = 'USMFAC';

    /** @var string Fax */
    public const FAXFAC = 'FAXFAC';

    /** @var string [E]IMAGEN DE LA FACTURA */
    public const IMGFAC = 'IMGFAC';

    /** @var string [E]EFECTIVO COBRADO DE LA FACTURA (PARA TPV) */
    public const EFEFAC = 'EFEFAC';

    /** @var string [E]CAMBIO DE LA FACTURA */
    public const CAMFAC = 'CAMFAC';

    /** @var string [F=000]Código del transportista */
    public const TRNFAC = 'TRNFAC';

    /** @var string Nº de expedición 1 (transporte) */
    public const CISFAC = 'CISFAC';

    /** @var string Nº de expedición 2 (transporte) */
    public const TRCFAC = 'TRCFAC';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FAC = 'NET4FAC';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FAC = 'PDTO4FAC';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FAC = 'IDTO4FAC';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FAC = 'PPPA4FAC';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FAC = 'IPPA4FAC';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FAC = 'PPOR4FAC';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FAC = 'IPOR4FAC';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FAC = 'PFIN4FAC';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FAC = 'IFIN4FAC';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FAC = 'BAS4FAC';

    /** @var string [E]Enviado por e-mail */
    public const EMAFAC = 'EMAFAC';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFAC = 'PASFAC';

    /** @var string [E]Ticket, porcentaje de descuento */
    public const TPDFAC = 'TPDFAC';

    /** @var string [E]Ticket, importe de descuento */
    public const TIDFAC = 'TIDFAC';

    /** @var string Código 1KB: Actividad de la factura */
    public const A1KFAC = 'A1KFAC';

    /** @var string E-mail de destino */
    public const CEMFAC = 'CEMFAC';

    /** @var string País del cliente */
    public const CPAFAC = 'CPAFAC';

    /** @var string Nombre del banco */
    public const BNOFAC = 'BNOFAC';

    /** @var string Banco: Entidad */
    public const BENFAC = 'BENFAC';

    /** @var string Banco: Oficina */
    public const BOFFAC = 'BOFFAC';

    /** @var string Banco: DC */
    public const BDCFAC = 'BDCFAC';

    /** @var string Banco: Cuenta */
    public const BNUFAC = 'BNUFAC';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FAC = 'TIVA1FAC';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FAC = 'TIVA2FAC';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FAC = 'TIVA3FAC';

    /** @var string Régimen especial del criterio de caja */
    public const RCCFAC = 'RCCFAC';

    /** @var string Banco: Código IBAN */
    public const BIBFAC = 'BIBFAC';

    /** @var string Banco: Código BIC */
    public const BICFAC = 'BICFAC';

    /** @var string Entregado en segunda forma de pago (para TPV) */
    public const EFSFAC = 'EFSFAC';

    /** @var string Entregado en vales (para TPV) */
    public const EFVFAC = 'EFVFAC';

    /** @var string Factura con impuestos en país de residencia */
    public const CIEFAC = 'CIEFAC';

    public const GFEFAC = 'GFEFAC';

    public const TIFFAC = 'TIFFAC';

    public const TPVIDFAC = 'TPVIDFAC';

    public const TERFAC = 'TERFAC';

    public const COPFAC = 'COPFAC';

    public const TFIFAC = 'TFIFAC';

    public const TFAFAC = 'TFAFAC';

    public const TREFAC = 'TREFAC';

    public const CVIFAC = 'CVIFAC';

    public const DEPFAC = 'DEPFAC';

    public const FROFAC = 'FROFAC';

    public const NASFAC = 'NASFAC';
}
