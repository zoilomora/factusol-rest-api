<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ALB
{
    public const TABLE_NAME = 'F_ALB';

    /** @var string Nº de serie */
    public const TIPALB = 'F_ALB.TIPALB';

    /** @var string [F=000000]Código */
    public const CODALB = 'F_ALB.CODALB';

    /** @var string Referencia */
    public const REFALB = 'F_ALB.REFALB';

    /** @var string Fecha */
    public const FECALB = 'F_ALB.FECALB';

    /** @var string [L=#0;Pte.#1;Facturado]Estado */
    public const ESTALB = 'F_ALB.ESTALB';

    /** @var string Almacén */
    public const ALMALB = 'F_ALB.ALMALB';

    /** @var string [F=00000]Agente */
    public const AGEALB = 'F_ALB.AGEALB';

    /** @var string Proveedor del cliente */
    public const PROALB = 'F_ALB.PROALB';

    /** @var string [F=00000]Cliente */
    public const CLIALB = 'F_ALB.CLIALB';

    /** @var string Nombre */
    public const CNOALB = 'F_ALB.CNOALB';

    /** @var string Domicilio */
    public const CDOALB = 'F_ALB.CDOALB';

    /** @var string Población */
    public const CPOALB = 'F_ALB.CPOALB';

    /** @var string Cód. Postal */
    public const CCPALB = 'F_ALB.CCPALB';

    /** @var string Provincia */
    public const CPRALB = 'F_ALB.CPRALB';

    /** @var string N.I.F. */
    public const CNIALB = 'F_ALB.CNIALB';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVALB = 'F_ALB.TIVALB';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQALB = 'F_ALB.REQALB';

    /** @var string Teléfono */
    public const TELALB = 'F_ALB.TELALB';

    /** @var string Neto 1 */
    public const NET1ALB = 'F_ALB.NET1ALB';

    /** @var string Neto 2 */
    public const NET2ALB = 'F_ALB.NET2ALB';

    /** @var string Neto 3 */
    public const NET3ALB = 'F_ALB.NET3ALB';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1ALB = 'F_ALB.PDTO1ALB';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2ALB = 'F_ALB.PDTO2ALB';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3ALB = 'F_ALB.PDTO3ALB';

    /** @var string Importe de descuento 1 */
    public const IDTO1ALB = 'F_ALB.IDTO1ALB';

    /** @var string Importe de descuento 2 */
    public const IDTO2ALB = 'F_ALB.IDTO2ALB';

    /** @var string Importe de descuento 3 */
    public const IDTO3ALB = 'F_ALB.IDTO3ALB';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1ALB = 'F_ALB.PPPA1ALB';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2ALB = 'F_ALB.PPPA2ALB';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3ALB = 'F_ALB.PPPA3ALB';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1ALB = 'F_ALB.IPPA1ALB';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2ALB = 'F_ALB.IPPA2ALB';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3ALB = 'F_ALB.IPPA3ALB';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1ALB = 'F_ALB.PPOR1ALB';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2ALB = 'F_ALB.PPOR2ALB';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3ALB = 'F_ALB.PPOR3ALB';

    /** @var string Importe de portes 1 */
    public const IPOR1ALB = 'F_ALB.IPOR1ALB';

    /** @var string Importe de portes 2 */
    public const IPOR2ALB = 'F_ALB.IPOR2ALB';

    /** @var string Importe de portes 3 */
    public const IPOR3ALB = 'F_ALB.IPOR3ALB';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1ALB = 'F_ALB.PFIN1ALB';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2ALB = 'F_ALB.PFIN2ALB';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3ALB = 'F_ALB.PFIN3ALB';

    /** @var string Importe de financiación 1 */
    public const IFIN1ALB = 'F_ALB.IFIN1ALB';

    /** @var string Importe de financiación 2 */
    public const IFIN2ALB = 'F_ALB.IFIN2ALB';

    /** @var string Importe de financiación 3 */
    public const IFIN3ALB = 'F_ALB.IFIN3ALB';

    /** @var string Base imponible 1 */
    public const BAS1ALB = 'F_ALB.BAS1ALB';

    /** @var string Base imponible 2 */
    public const BAS2ALB = 'F_ALB.BAS2ALB';

    /** @var string Base imponible 3 */
    public const BAS3ALB = 'F_ALB.BAS3ALB';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1ALB = 'F_ALB.PIVA1ALB';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2ALB = 'F_ALB.PIVA2ALB';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3ALB = 'F_ALB.PIVA3ALB';

    /** @var string Importe de impuestos 1 */
    public const IIVA1ALB = 'F_ALB.IIVA1ALB';

    /** @var string Importe de impuestos 2 */
    public const IIVA2ALB = 'F_ALB.IIVA2ALB';

    /** @var string Importe de impuestos 3 */
    public const IIVA3ALB = 'F_ALB.IIVA3ALB';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1ALB = 'F_ALB.PREC1ALB';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2ALB = 'F_ALB.PREC2ALB';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3ALB = 'F_ALB.PREC3ALB';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1ALB = 'F_ALB.IREC1ALB';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2ALB = 'F_ALB.IREC2ALB';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3ALB = 'F_ALB.IREC3ALB';

    /** @var string Porcentaje de retención */
    public const PRET1ALB = 'F_ALB.PRET1ALB';

    /** @var string Importe de retención */
    public const IRET1ALB = 'F_ALB.IRET1ALB';

    /** @var string Total */
    public const TOTALB = 'F_ALB.TOTALB';

    /** @var string Forma de pago */
    public const FOPALB = 'F_ALB.FOPALB';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTALB = 'F_ALB.PRTALB';

    /** @var string Portes (texto) */
    public const TPOALB = 'F_ALB.TPOALB';

    /** @var string Línea 1 de observaciones */
    public const OB1ALB = 'F_ALB.OB1ALB';

    /** @var string Línea 2 de observaciones */
    public const OB2ALB = 'F_ALB.OB2ALB';

    /** @var string Código de la dirección de entrega */
    public const OBRALB = 'F_ALB.OBRALB';

    /** @var string Remitido por */
    public const REPALB = 'F_ALB.REPALB';

    /** @var string Embalado por */
    public const EMBALB = 'F_ALB.EMBALB';

    /** @var string A la atención de */
    public const AATALB = 'F_ALB.AATALB';

    /** @var string Su referencia */
    public const REAALB = 'F_ALB.REAALB';

    /** @var string Nº de su pedido */
    public const PEDALB = 'F_ALB.PEDALB';

    /** @var string Fecha de su pedido */
    public const FPEALB = 'F_ALB.FPEALB';

    /** @var string [L=#0;Pte.#1;Cobrado#2;Cob. Parcial]Estado (cobros) */
    public const COBALB = 'F_ALB.COBALB';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRAALB = 'F_ALB.TRAALB';

    /** @var string [E]Impresa */
    public const IMPALB = 'F_ALB.IMPALB';

    /** @var string Transportista */
    public const TRNALB = 'F_ALB.TRNALB';

    /** @var string Nº de expedición 1 */
    public const CISALB = 'F_ALB.CISALB';

    /** @var string Nº de expedición 2 */
    public const TRCALB = 'F_ALB.TRCALB';

    /** @var string [E]Campo para anotaciones privadas del documento */
    public const PRIALB = 'F_ALB.PRIALB';

    /** @var string [E]Documentos asociados al documento */
    public const ASOALB = 'F_ALB.ASOALB';

    /** @var string Banco del cliente */
    public const CBAALB = 'F_ALB.CBAALB';

    /** @var string [E]Enviado a través de fichero de ventas */
    public const ENVALB = 'F_ALB.ENVALB';

    /** @var string [F=hh:mm]Hora */
    public const HORALB = 'F_ALB.HORALB';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMALB = 'F_ALB.COMALB';

    /** @var string Código del usuario que creó el documento */
    public const USUALB = 'F_ALB.USUALB';

    /** @var string Código del último usuario que modificó el documento */
    public const USMALB = 'F_ALB.USMALB';

    /** @var string Fax */
    public const FAXALB = 'F_ALB.FAXALB';

    /** @var string [E]EFECTIVO COBRADO DEL DOCUMENTO (PARA TPV) */
    public const EFEALB = 'F_ALB.EFEALB';

    /** @var string [E]CAMBIO DEL DOCUMENTO (PARA TPV) */
    public const CAMALB = 'F_ALB.CAMALB';

    /** @var string Neto (Exento de impuestos) */
    public const NET4ALB = 'F_ALB.NET4ALB';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4ALB = 'F_ALB.PDTO4ALB';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4ALB = 'F_ALB.IDTO4ALB';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4ALB = 'F_ALB.PPPA4ALB';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4ALB = 'F_ALB.IPPA4ALB';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4ALB = 'F_ALB.PPOR4ALB';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4ALB = 'F_ALB.IPOR4ALB';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4ALB = 'F_ALB.PFIN4ALB';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4ALB = 'F_ALB.IFIN4ALB';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4ALB = 'F_ALB.BAS4ALB';

    /** @var string [E]Enviado por e-mail */
    public const EMAALB = 'F_ALB.EMAALB';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASALB = 'F_ALB.PASALB';

    /** @var string [E]Ticket, porcentaje de descuento */
    public const TPDALB = 'F_ALB.TPDALB';

    /** @var string [E]Ticket, importe de descuento */
    public const TIDALB = 'F_ALB.TIDALB';

    /** @var string E-mail de destino */
    public const CEMALB = 'F_ALB.CEMALB';

    /** @var string País del cliente */
    public const CPAALB = 'F_ALB.CPAALB';

    /** @var string Nombre del banco */
    public const BNOALB = 'F_ALB.BNOALB';

    /** @var string Banco: Entidad */
    public const BENALB = 'F_ALB.BENALB';

    /** @var string Banco: Oficina */
    public const BOFALB = 'F_ALB.BOFALB';

    /** @var string Banco: DC */
    public const BDCALB = 'F_ALB.BDCALB';

    /** @var string Banco: Cuenta */
    public const BNUALB = 'F_ALB.BNUALB';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1ALB = 'F_ALB.TIVA1ALB';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2ALB = 'F_ALB.TIVA2ALB';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3ALB = 'F_ALB.TIVA3ALB';

    /** @var string Banco: Código IBAN */
    public const BIBALB = 'F_ALB.BIBALB';

    /** @var string Banco: Código BIC */
    public const BICALB = 'F_ALB.BICALB';

    /** @var string Entregado en segunda forma de pago (para TPV) */
    public const EFSALB = 'F_ALB.EFSALB';

    /** @var string Entregado en vales (para TPV) */
    public const EFVALB = 'F_ALB.EFVALB';

    public const TPVIDALB = 'F_ALB.TPVIDALB';

    public const TERALB = 'F_ALB.TERALB';

    public const TFIALB = 'F_ALB.TFIALB';

    public const TFAALB = 'F_ALB.TFAALB';

    public const DEPALB = 'F_ALB.DEPALB';

    public const NASALB = 'F_ALB.NASALB';
}
