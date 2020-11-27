<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FAB
{
    public const TABLE_NAME = 'F_FAB';

    /** @var string Nº de serie */
    public const TIPFAB = 'TIPFAB';

    /** @var string [F=000000]Código */
    public const CODFAB = 'CODFAB';

    /** @var string Referencia */
    public const REFFAB = 'REFFAB';

    /** @var string Fecha */
    public const FECFAB = 'FECFAB';

    /** @var string [F=#0;Pte.#1;Pte. Parcial#2;Cobrada#3;Devuelta]Estado */
    public const ESTFAB = 'ESTFAB';

    /** @var string Almacén */
    public const ALMFAB = 'ALMFAB';

    /** @var string [F=00000]Agente */
    public const AGEFAB = 'AGEFAB';

    /** @var string Proveedor del cliente */
    public const PROFAB = 'PROFAB';

    /** @var string [F=00000]Cliente */
    public const CLIFAB = 'CLIFAB';

    /** @var string Nombre */
    public const CNOFAB = 'CNOFAB';

    /** @var string Domicilio */
    public const CDOFAB = 'CDOFAB';

    /** @var string Población */
    public const CPOFAB = 'CPOFAB';

    /** @var string Cód. Postal */
    public const CCPFAB = 'CCPFAB';

    /** @var string Provincia */
    public const CPRFAB = 'CPRFAB';

    /** @var string N.I.F. */
    public const CNIFAB = 'CNIFAB';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFAB = 'TIVFAB';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQFAB = 'REQFAB';

    /** @var string Teléfono */
    public const TELFAB = 'TELFAB';

    /** @var string Neto 1 */
    public const NET1FAB = 'NET1FAB';

    /** @var string Neto 2 */
    public const NET2FAB = 'NET2FAB';

    /** @var string Neto 3 */
    public const NET3FAB = 'NET3FAB';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FAB = 'PDTO1FAB';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FAB = 'PDTO2FAB';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FAB = 'PDTO3FAB';

    /** @var string Importe de descuento 1 */
    public const IDTO1FAB = 'IDTO1FAB';

    /** @var string Importe de descuento 2 */
    public const IDTO2FAB = 'IDTO2FAB';

    /** @var string Importe de descuento 3 */
    public const IDTO3FAB = 'IDTO3FAB';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FAB = 'PPPA1FAB';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FAB = 'PPPA2FAB';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FAB = 'PPPA3FAB';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FAB = 'IPPA1FAB';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FAB = 'IPPA2FAB';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FAB = 'IPPA3FAB';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FAB = 'PPOR1FAB';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FAB = 'PPOR2FAB';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FAB = 'PPOR3FAB';

    /** @var string Importe de portes 1 */
    public const IPOR1FAB = 'IPOR1FAB';

    /** @var string Importe de portes 2 */
    public const IPOR2FAB = 'IPOR2FAB';

    /** @var string Importe de portes 3 */
    public const IPOR3FAB = 'IPOR3FAB';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FAB = 'PFIN1FAB';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FAB = 'PFIN2FAB';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FAB = 'PFIN3FAB';

    /** @var string Importe de financiación 1 */
    public const IFIN1FAB = 'IFIN1FAB';

    /** @var string Importe de financiación 2 */
    public const IFIN2FAB = 'IFIN2FAB';

    /** @var string Importe de financiación 3 */
    public const IFIN3FAB = 'IFIN3FAB';

    /** @var string Base imponible 1 */
    public const BAS1FAB = 'BAS1FAB';

    /** @var string Base imponible 2 */
    public const BAS2FAB = 'BAS2FAB';

    /** @var string Base imponible 3 */
    public const BAS3FAB = 'BAS3FAB';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FAB = 'PIVA1FAB';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FAB = 'PIVA2FAB';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FAB = 'PIVA3FAB';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FAB = 'IIVA1FAB';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FAB = 'IIVA2FAB';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FAB = 'IIVA3FAB';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FAB = 'PREC1FAB';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FAB = 'PREC2FAB';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FAB = 'PREC3FAB';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FAB = 'IREC1FAB';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FAB = 'IREC2FAB';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FAB = 'IREC3FAB';

    /** @var string Porcentaje de retención */
    public const PRET1FAB = 'PRET1FAB';

    /** @var string Importe de retención */
    public const IRET1FAB = 'IRET1FAB';

    /** @var string Total */
    public const TOTFAB = 'TOTFAB';

    /** @var string Forma de pago */
    public const FOPFAB = 'FOPFAB';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTFAB = 'PRTFAB';

    /** @var string Portes (texto) */
    public const TPOFAB = 'TPOFAB';

    /** @var string Línea 1 de observaciones */
    public const OB1FAB = 'OB1FAB';

    /** @var string Línea 2 de observaciones */
    public const OB2FAB = 'OB2FAB';

    /** @var string [E]Tipo del documento rectificado */
    public const TDRFAB = 'TDRFAB';

    /** @var string [E]Código del documento rectificado */
    public const CDRFAB = 'CDRFAB';

    /** @var string Código de la dirección de entrega */
    public const OBRFAB = 'OBRFAB';

    /** @var string Remitido por */
    public const REPFAB = 'REPFAB';

    /** @var string Embalado por */
    public const EMBFAB = 'EMBFAB';

    /** @var string A la atención de */
    public const AATFAB = 'AATFAB';

    /** @var string Su referencia */
    public const REAFAB = 'REAFAB';

    /** @var string Nº de su pedido */
    public const PEDFAB = 'PEDFAB';

    /** @var string Fecha de su pedido */
    public const FPEFAB = 'FPEFAB';

    /** @var string [E]0:Pendiente,1:Girado */
    public const COBFAB = 'COBFAB';

    /** @var string [E]Tipo de creacion */
    public const CREFAB = 'CREFAB';

    /** @var string [E]Tipo del recibo que se crea a partir de esta factura */
    public const TIRFAB = 'TIRFAB';

    /** @var string [E]Codigo del recibo que se crea a partir de esta factura */
    public const CORFAB = 'CORFAB';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRAFAB = 'TRAFAB';

    /** @var string [E]Vencimientos de la factura */
    public const VENFAB = 'VENFAB';

    /** @var string [E]Campo para anotaciones privadas del documento */
    public const PRIFAB = 'PRIFAB';

    /** @var string [E]Documentos externos asociados al documento */
    public const ASOFAB = 'ASOFAB';

    /** @var string [E]Impresa */
    public const IMPFAB = 'IMPFAB';

    /** @var string Banco */
    public const CBAFAB = 'CBAFAB';

    /** @var string [F=hh:mm]Hora de creación */
    public const HORFAB = 'HORFAB';

    /** @var string [E]Comentarios para imprimir después de las líneas de detalle */
    public const COMFAB = 'COMFAB';

    /** @var string Código del usuario que creó el documento */
    public const USUFAB = 'USUFAB';

    /** @var string Código del último usuario que modificó el documento */
    public const USMFAB = 'USMFAB';

    /** @var string Fax */
    public const FAXFAB = 'FAXFAB';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FAB = 'NET4FAB';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FAB = 'PDTO4FAB';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FAB = 'IDTO4FAB';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FAB = 'PPPA4FAB';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FAB = 'IPPA4FAB';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FAB = 'PPOR4FAB';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FAB = 'IPOR4FAB';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FAB = 'PFIN4FAB';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FAB = 'IFIN4FAB';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FAB = 'BAS4FAB';

    /** @var string [E]Enviado por e-mail */
    public const EMAFAB = 'EMAFAB';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFAB = 'PASFAB';

    /** @var string E-mail de destino */
    public const CEMFAB = 'CEMFAB';

    /** @var string País del cliente */
    public const CPAFAB = 'CPAFAB';

    /** @var string Nombre del banco */
    public const BNOFAB = 'BNOFAB';

    /** @var string Banco: Entidad */
    public const BENFAB = 'BENFAB';

    /** @var string Banco: Oficina */
    public const BOFFAB = 'BOFFAB';

    /** @var string Banco: DC */
    public const BDCFAB = 'BDCFAB';

    /** @var string Banco: Cuenta */
    public const BNUFAB = 'BNUFAB';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FAB = 'TIVA1FAB';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FAB = 'TIVA2FAB';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FAB = 'TIVA3FAB';

    /** @var string Banco: Código IBAN */
    public const BIBFAB = 'BIBFAB';

    /** @var string Banco: Código BIC */
    public const BICFAB = 'BICFAB';

    public const TPVIDFAB = 'TPVIDFAB';

    public const TERFAB = 'TERFAB';
}
