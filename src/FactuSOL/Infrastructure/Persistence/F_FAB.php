<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_FAB
{
    public const TABLE_NAME = 'F_FAB';

    /** @var string Nº de serie */
    public const TIPFAB = 'F_FAB.TIPFAB';

    /** @var string [F=000000]Código */
    public const CODFAB = 'F_FAB.CODFAB';

    /** @var string Referencia */
    public const REFFAB = 'F_FAB.REFFAB';

    /** @var string Fecha */
    public const FECFAB = 'F_FAB.FECFAB';

    /** @var string [F=#0;Pte.#1;Pte. Parcial#2;Cobrada#3;Devuelta]Estado */
    public const ESTFAB = 'F_FAB.ESTFAB';

    /** @var string Almacén */
    public const ALMFAB = 'F_FAB.ALMFAB';

    /** @var string [F=00000]Agente */
    public const AGEFAB = 'F_FAB.AGEFAB';

    /** @var string Proveedor del cliente */
    public const PROFAB = 'F_FAB.PROFAB';

    /** @var string [F=00000]Cliente */
    public const CLIFAB = 'F_FAB.CLIFAB';

    /** @var string Nombre */
    public const CNOFAB = 'F_FAB.CNOFAB';

    /** @var string Domicilio */
    public const CDOFAB = 'F_FAB.CDOFAB';

    /** @var string Población */
    public const CPOFAB = 'F_FAB.CPOFAB';

    /** @var string Cód. Postal */
    public const CCPFAB = 'F_FAB.CCPFAB';

    /** @var string Provincia */
    public const CPRFAB = 'F_FAB.CPRFAB';

    /** @var string N.I.F. */
    public const CNIFAB = 'F_FAB.CNIFAB';

    /** @var string [L=#0;Con IVA#1;Sin IVA#2;Intracomunitario#3;Importación]Tipo de IVA */
    public const TIVFAB = 'F_FAB.TIVFAB';

    /** @var string [L=#No#1;Sí]Recargo de equivalencia */
    public const REQFAB = 'F_FAB.REQFAB';

    /** @var string Teléfono */
    public const TELFAB = 'F_FAB.TELFAB';

    /** @var string Neto 1 */
    public const NET1FAB = 'F_FAB.NET1FAB';

    /** @var string Neto 2 */
    public const NET2FAB = 'F_FAB.NET2FAB';

    /** @var string Neto 3 */
    public const NET3FAB = 'F_FAB.NET3FAB';

    /** @var string Porcentaje de descuento 1 */
    public const PDTO1FAB = 'F_FAB.PDTO1FAB';

    /** @var string Porcentaje de descuento 2 */
    public const PDTO2FAB = 'F_FAB.PDTO2FAB';

    /** @var string Porcentaje de descuento 3 */
    public const PDTO3FAB = 'F_FAB.PDTO3FAB';

    /** @var string Importe de descuento 1 */
    public const IDTO1FAB = 'F_FAB.IDTO1FAB';

    /** @var string Importe de descuento 2 */
    public const IDTO2FAB = 'F_FAB.IDTO2FAB';

    /** @var string Importe de descuento 3 */
    public const IDTO3FAB = 'F_FAB.IDTO3FAB';

    /** @var string Porcentaje de pronto pago 1 */
    public const PPPA1FAB = 'F_FAB.PPPA1FAB';

    /** @var string Porcentaje de pronto pago 2 */
    public const PPPA2FAB = 'F_FAB.PPPA2FAB';

    /** @var string Porcentaje de pronto pago 3 */
    public const PPPA3FAB = 'F_FAB.PPPA3FAB';

    /** @var string Importe de pronto pago 1 */
    public const IPPA1FAB = 'F_FAB.IPPA1FAB';

    /** @var string Importe de pronto pago 2 */
    public const IPPA2FAB = 'F_FAB.IPPA2FAB';

    /** @var string Importe de pronto pago 3 */
    public const IPPA3FAB = 'F_FAB.IPPA3FAB';

    /** @var string Porcentaje de portes 1 */
    public const PPOR1FAB = 'F_FAB.PPOR1FAB';

    /** @var string Porcentaje de portes 2 */
    public const PPOR2FAB = 'F_FAB.PPOR2FAB';

    /** @var string Porcentaje de portes 3 */
    public const PPOR3FAB = 'F_FAB.PPOR3FAB';

    /** @var string Importe de portes 1 */
    public const IPOR1FAB = 'F_FAB.IPOR1FAB';

    /** @var string Importe de portes 2 */
    public const IPOR2FAB = 'F_FAB.IPOR2FAB';

    /** @var string Importe de portes 3 */
    public const IPOR3FAB = 'F_FAB.IPOR3FAB';

    /** @var string Porcentaje de financiación 1 */
    public const PFIN1FAB = 'F_FAB.PFIN1FAB';

    /** @var string Porcentaje de financiación 2 */
    public const PFIN2FAB = 'F_FAB.PFIN2FAB';

    /** @var string Porcentaje de financiación 3 */
    public const PFIN3FAB = 'F_FAB.PFIN3FAB';

    /** @var string Importe de financiación 1 */
    public const IFIN1FAB = 'F_FAB.IFIN1FAB';

    /** @var string Importe de financiación 2 */
    public const IFIN2FAB = 'F_FAB.IFIN2FAB';

    /** @var string Importe de financiación 3 */
    public const IFIN3FAB = 'F_FAB.IFIN3FAB';

    /** @var string Base imponible 1 */
    public const BAS1FAB = 'F_FAB.BAS1FAB';

    /** @var string Base imponible 2 */
    public const BAS2FAB = 'F_FAB.BAS2FAB';

    /** @var string Base imponible 3 */
    public const BAS3FAB = 'F_FAB.BAS3FAB';

    /** @var string Porcentaje de impuestos 1 */
    public const PIVA1FAB = 'F_FAB.PIVA1FAB';

    /** @var string Porcentaje de impuestos 2 */
    public const PIVA2FAB = 'F_FAB.PIVA2FAB';

    /** @var string Porcentaje de impuestos 3 */
    public const PIVA3FAB = 'F_FAB.PIVA3FAB';

    /** @var string Importe de impuestos 1 */
    public const IIVA1FAB = 'F_FAB.IIVA1FAB';

    /** @var string Importe de impuestos 2 */
    public const IIVA2FAB = 'F_FAB.IIVA2FAB';

    /** @var string Importe de impuestos 3 */
    public const IIVA3FAB = 'F_FAB.IIVA3FAB';

    /** @var string Porcentaje de recargo de equivalencia 1 */
    public const PREC1FAB = 'F_FAB.PREC1FAB';

    /** @var string Porcentaje de recargo de equivalencia 2 */
    public const PREC2FAB = 'F_FAB.PREC2FAB';

    /** @var string Porcentaje de recargo de equivalencia 3 */
    public const PREC3FAB = 'F_FAB.PREC3FAB';

    /** @var string Importe de recargo de equivalencia 1 */
    public const IREC1FAB = 'F_FAB.IREC1FAB';

    /** @var string Importe de recargo de equivalencia 2 */
    public const IREC2FAB = 'F_FAB.IREC2FAB';

    /** @var string Importe de recargo de equivalencia 3 */
    public const IREC3FAB = 'F_FAB.IREC3FAB';

    /** @var string Porcentaje de retención */
    public const PRET1FAB = 'F_FAB.PRET1FAB';

    /** @var string Importe de retención */
    public const IRET1FAB = 'F_FAB.IRET1FAB';

    /** @var string Total */
    public const TOTFAB = 'F_FAB.TOTFAB';

    /** @var string Forma de pago */
    public const FOPFAB = 'F_FAB.FOPFAB';

    /** @var string [L=#Pagados#1;Debidos]Portes */
    public const PRTFAB = 'F_FAB.PRTFAB';

    /** @var string Portes (texto) */
    public const TPOFAB = 'F_FAB.TPOFAB';

    /** @var string Línea 1 de observaciones */
    public const OB1FAB = 'F_FAB.OB1FAB';

    /** @var string Línea 2 de observaciones */
    public const OB2FAB = 'F_FAB.OB2FAB';

    /** @var string [E]Tipo del documento rectificado */
    public const TDRFAB = 'F_FAB.TDRFAB';

    /** @var string [E]Código del documento rectificado */
    public const CDRFAB = 'F_FAB.CDRFAB';

    /** @var string Código de la dirección de entrega */
    public const OBRFAB = 'F_FAB.OBRFAB';

    /** @var string Remitido por */
    public const REPFAB = 'F_FAB.REPFAB';

    /** @var string Embalado por */
    public const EMBFAB = 'F_FAB.EMBFAB';

    /** @var string A la atención de */
    public const AATFAB = 'F_FAB.AATFAB';

    /** @var string Su referencia */
    public const REAFAB = 'F_FAB.REAFAB';

    /** @var string Nº de su pedido */
    public const PEDFAB = 'F_FAB.PEDFAB';

    /** @var string Fecha de su pedido */
    public const FPEFAB = 'F_FAB.FPEFAB';

    /** @var string [E]0:Pendiente,1:Girado */
    public const COBFAB = 'F_FAB.COBFAB';

    /** @var string [E]Tipo de creacion */
    public const CREFAB = 'F_FAB.CREFAB';

    /** @var string [E]Tipo del recibo que se crea a partir de esta factura */
    public const TIRFAB = 'F_FAB.TIRFAB';

    /** @var string [E]Codigo del recibo que se crea a partir de esta factura */
    public const CORFAB = 'F_FAB.CORFAB';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRAFAB = 'F_FAB.TRAFAB';

    /** @var string [E]Vencimientos de la factura */
    public const VENFAB = 'F_FAB.VENFAB';

    /** @var string [E]Campo para anotaciones privadas del documento */
    public const PRIFAB = 'F_FAB.PRIFAB';

    /** @var string [E]Documentos externos asociados al documento */
    public const ASOFAB = 'F_FAB.ASOFAB';

    /** @var string [E]Impresa */
    public const IMPFAB = 'F_FAB.IMPFAB';

    /** @var string Banco */
    public const CBAFAB = 'F_FAB.CBAFAB';

    /** @var string [F=hh:mm]Hora de creación */
    public const HORFAB = 'F_FAB.HORFAB';

    /** @var string [E]Comentarios para imprimir después de las líneas de detalle */
    public const COMFAB = 'F_FAB.COMFAB';

    /** @var string Código del usuario que creó el documento */
    public const USUFAB = 'F_FAB.USUFAB';

    /** @var string Código del último usuario que modificó el documento */
    public const USMFAB = 'F_FAB.USMFAB';

    /** @var string Fax */
    public const FAXFAB = 'F_FAB.FAXFAB';

    /** @var string Neto (Exento de impuestos) */
    public const NET4FAB = 'F_FAB.NET4FAB';

    /** @var string Porcentaje de descuento (Exento de impuestos) */
    public const PDTO4FAB = 'F_FAB.PDTO4FAB';

    /** @var string Importe de descuento (Exento de impuestos) */
    public const IDTO4FAB = 'F_FAB.IDTO4FAB';

    /** @var string Porcentaje de pronto pago (Exento de impuestos) */
    public const PPPA4FAB = 'F_FAB.PPPA4FAB';

    /** @var string Importe de pronto pago (Exento de impuestos) */
    public const IPPA4FAB = 'F_FAB.IPPA4FAB';

    /** @var string Porcentaje de portes (Exento de impuestos) */
    public const PPOR4FAB = 'F_FAB.PPOR4FAB';

    /** @var string Importe de portes (Exento de impuestos) */
    public const IPOR4FAB = 'F_FAB.IPOR4FAB';

    /** @var string Porcentaje de financiación (Exento de impuestos) */
    public const PFIN4FAB = 'F_FAB.PFIN4FAB';

    /** @var string Importe de financiación (Exento de impuestos) */
    public const IFIN4FAB = 'F_FAB.IFIN4FAB';

    /** @var string Base (Exenta de impuestos) */
    public const BAS4FAB = 'F_FAB.BAS4FAB';

    /** @var string [E]Enviado por e-mail */
    public const EMAFAB = 'F_FAB.EMAFAB';

    /** @var string [E]Permisos y contraseña del documento */
    public const PASFAB = 'F_FAB.PASFAB';

    /** @var string E-mail de destino */
    public const CEMFAB = 'F_FAB.CEMFAB';

    /** @var string País del cliente */
    public const CPAFAB = 'F_FAB.CPAFAB';

    /** @var string Nombre del banco */
    public const BNOFAB = 'F_FAB.BNOFAB';

    /** @var string Banco: Entidad */
    public const BENFAB = 'F_FAB.BENFAB';

    /** @var string Banco: Oficina */
    public const BOFFAB = 'F_FAB.BOFFAB';

    /** @var string Banco: DC */
    public const BDCFAB = 'F_FAB.BDCFAB';

    /** @var string Banco: Cuenta */
    public const BNUFAB = 'F_FAB.BNUFAB';

    /** @var string [E]Tipo de iva al que pertenece el neto 1 (0 a 6) */
    public const TIVA1FAB = 'F_FAB.TIVA1FAB';

    /** @var string [E]Tipo de iva al que pertenece el neto 2 (0 a 6) */
    public const TIVA2FAB = 'F_FAB.TIVA2FAB';

    /** @var string [E]Tipo de iva al que pertenece el neto 3 (0 a 6) */
    public const TIVA3FAB = 'F_FAB.TIVA3FAB';

    /** @var string Banco: Código IBAN */
    public const BIBFAB = 'F_FAB.BIBFAB';

    /** @var string Banco: Código BIC */
    public const BICFAB = 'F_FAB.BICFAB';

    public const TPVIDFAB = 'F_FAB.TPVIDFAB';

    public const TERFAB = 'F_FAB.TERFAB';
}
