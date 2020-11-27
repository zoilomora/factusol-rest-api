<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ALB
{
    public const TABLE_NAME = 'F_ALB';

    /** @var string Nº de serie */
    public const TIPALB = 'TIPALB';

    /** @var string [F=000000]Código */
    public const CODALB = 'CODALB';

    /** @var string Referencia */
    public const REFALB = 'REFALB';

    /** @var string Fecha */
    public const FECALB = 'FECALB';

    /** @var string [L=#0;Pte.#1;Facturado]Estado */
    public const ESTALB = 'ESTALB';

    /** @var string Almacén */
    public const ALMALB = 'ALMALB';

    /** @var string [F=00000]Agente */
    public const AGEALB = 'AGEALB';

    /** @var string Proveedor del cliente */
    public const PROALB = 'PROALB';

    /** @var string [F=00000]Cliente */
    public const CLIALB = 'CLIALB';

    /** @var string Nombre */
    public const CNOALB = 'CNOALB';

    /** @var string Domicilio */
    public const CDOALB = 'CDOALB';

    /** @var string Población */
    public const CPOALB = 'CPOALB';

    /** @var string Cód. Postal */
    public const CCPALB = 'CCPALB';

    /** @var string Provincia */
    public const CPRALB = 'CPRALB';

    /** @var string N.I.F. */
    public const CNIALB = 'CNIALB';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVALB = 'TIVALB';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQALB = 'REQALB';

    /** @var string Teléfono */
    public const TELALB = 'TELALB';

    /** @var string Neto 1 */
    public const NET1ALB = 'NET1ALB';

    /** @var string Neto 2 */
    public const NET2ALB = 'NET2ALB';

    /** @var string Neto 3 */
    public const NET3ALB = 'NET3ALB';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1ALB = 'PDTO1ALB';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2ALB = 'PDTO2ALB';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3ALB = 'PDTO3ALB';

    /** @var string Importe de descuento 1 */
    public const IDTO1ALB = 'IDTO1ALB';

    /** @var string Importe de descuento 2 */
    public const IDTO2ALB = 'IDTO2ALB';

    /** @var string Importe de descuento 3 */
    public const IDTO3ALB = 'IDTO3ALB';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1ALB = 'PPPA1ALB';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2ALB = 'PPPA2ALB';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3ALB = 'PPPA3ALB';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1ALB = 'IPPA1ALB';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2ALB = 'IPPA2ALB';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3ALB = 'IPPA3ALB';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1ALB = 'PPOR1ALB';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2ALB = 'PPOR2ALB';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3ALB = 'PPOR3ALB';

    /** @var string Importe de portes 1 */
    public const IPOR1ALB = 'IPOR1ALB';

    /** @var string Importe de portes 2 */
    public const IPOR2ALB = 'IPOR2ALB';

    /** @var string Importe de portes 3 */
    public const IPOR3ALB = 'IPOR3ALB';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1ALB = 'PFIN1ALB';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2ALB = 'PFIN2ALB';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3ALB = 'PFIN3ALB';

    /** @var string Importe de financiación 1 */
    public const IFIN1ALB = 'IFIN1ALB';

    /** @var string Importe de financiación 2 */
    public const IFIN2ALB = 'IFIN2ALB';

    /** @var string Importe de financiación 3 */
    public const IFIN3ALB = 'IFIN3ALB';

    /** @var string Base imponible 1 */
    public const BAS1ALB = 'BAS1ALB';

    /** @var string Base imponible 2 */
    public const BAS2ALB = 'BAS2ALB';

    /** @var string Base imponible 3 */
    public const BAS3ALB = 'BAS3ALB';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1ALB = 'PIVA1ALB';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2ALB = 'PIVA2ALB';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3ALB = 'PIVA3ALB';

    /** @var string Importe de impuestos 1 */
    public const IIVA1ALB = 'IIVA1ALB';

    /** @var string Importe de impuestos 2 */
    public const IIVA2ALB = 'IIVA2ALB';

    /** @var string Importe de impuestos 3 */
    public const IIVA3ALB = 'IIVA3ALB';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1ALB = 'PREC1ALB';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2ALB = 'PREC2ALB';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3ALB = 'PREC3ALB';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1ALB = 'IREC1ALB';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2ALB = 'IREC2ALB';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3ALB = 'IREC3ALB';

    /** @var string Porcentaje de retención */
    public const PRET1ALB = 'PRET1ALB';

    /** @var string Importe de retención */
    public const IRET1ALB = 'IRET1ALB';

    /** @var string Total */
    public const TOTALB = 'TOTALB';

    /** @var string Forma de pago */
    public const FOPALB = 'FOPALB';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTALB = 'PRTALB';

    /** @var string Portes (texto) */
    public const TPOALB = 'TPOALB';

    /** @var string Línea 1 de observaciones */
    public const OB1ALB = 'OB1ALB';

    /** @var string Línea 2 de observaciones */
    public const OB2ALB = 'OB2ALB';

    /** @var string Código de la dirección de entrega */
    public const OBRALB = 'OBRALB';

    /** @var string Remitido por */
    public const REPALB = 'REPALB';

    /** @var string Embalado por */
    public const EMBALB = 'EMBALB';

    /** @var string A la atención de */
    public const AATALB = 'AATALB';

    /** @var string Su referencia */
    public const REAALB = 'REAALB';

    /** @var string Nº de su pedido */
    public const PEDALB = 'PEDALB';

    /** @var string Fecha de su pedido */
    public const FPEALB = 'FPEALB';

    /** @var string [L=#0;Pte.#1;Cobrado#2;Cob. Parcial]Estado (cobros) */
    public const COBALB = 'COBALB';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRAALB = 'TRAALB';

    /** @var string [E]Impresa */
    public const IMPALB = 'IMPALB';

    /** @var string Transportista */
    public const TRNALB = 'TRNALB';

    /** @var string Nº de expedición 1 */
    public const CISALB = 'CISALB';

    /** @var string Nº de expedición 2 */
    public const TRCALB = 'TRCALB';

    /** @var string [E]Campo para anotaciones privadas del documento */
    public const PRIALB = 'PRIALB';

    /** @var string [E]Documentos asociados al documento */
    public const ASOALB = 'ASOALB';

    /** @var string Banco del cliente */
    public const CBAALB = 'CBAALB';

    /** @var string [E]Enviado a través de fichero de ventas */
    public const ENVALB = 'ENVALB';

    /** @var string [F=hh:mm]Hora */
    public const HORALB = 'HORALB';

    /** @var string [E]Comentarios después de las líneas de detalle */
    public const COMALB = 'COMALB';

    /** @var string Código del usuario que creó el documento */
    public const USUALB = 'USUALB';

    /** @var string Código del último usuario que modificó el documento */
    public const USMALB = 'USMALB';

    /** @var string Fax */
    public const FAXALB = 'FAXALB';

    /** @var string [E]EFECTIVO COBRADO DEL DOCUMENTO (PARA TPV) */
    public const EFEALB = 'EFEALB';

    /** @var string [E]CAMBIO DEL DOCUMENTO (PARA TPV) */
    public const CAMALB = 'CAMALB';

    /** @var string Neto (Exento de impuestos) */
    public const NET4ALB = 'NET4ALB';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4ALB = 'PDTO4ALB';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4ALB = 'IDTO4ALB';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4ALB = 'PPPA4ALB';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4ALB = 'IPPA4ALB';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4ALB = 'PPOR4ALB';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4ALB = 'IPOR4ALB';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4ALB = 'PFIN4ALB';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4ALB = 'IFIN4ALB';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4ALB = 'BAS4ALB';

    /** @var string [E]Enviado por e-mail */
    public const EMAALB = 'EMAALB';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASALB = 'PASALB';

    /** @var string [E]Ticket, porcentaje de descuento */
    public const TPDALB = 'TPDALB';

    /** @var string [E]Ticket, importe de descuento */
    public const TIDALB = 'TIDALB';

    /** @var string E-mail de destino */
    public const CEMALB = 'CEMALB';

    /** @var string País del cliente */
    public const CPAALB = 'CPAALB';

    /** @var string Nombre del banco */
    public const BNOALB = 'BNOALB';

    /** @var string Banco: Entidad */
    public const BENALB = 'BENALB';

    /** @var string Banco: Oficina */
    public const BOFALB = 'BOFALB';

    /** @var string Banco: DC */
    public const BDCALB = 'BDCALB';

    /** @var string Banco: Cuenta */
    public const BNUALB = 'BNUALB';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1ALB = 'TIVA1ALB';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2ALB = 'TIVA2ALB';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3ALB = 'TIVA3ALB';

    /** @var string Banco: Código IBAN */
    public const BIBALB = 'BIBALB';

    /** @var string Banco: Código BIC */
    public const BICALB = 'BICALB';

    /** @var string Entregado en segunda forma de pago (para TPV) */
    public const EFSALB = 'EFSALB';

    /** @var string Entregado en vales (para TPV) */
    public const EFVALB = 'EFVALB';

    public const TPVIDALB = 'TPVIDALB';

    public const TERALB = 'TERALB';

    public const TFIALB = 'TFIALB';

    public const TFAALB = 'TFAALB';

    public const DEPALB = 'DEPALB';

    public const NASALB = 'NASALB';
}
